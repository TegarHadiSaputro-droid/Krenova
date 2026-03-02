<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['web'])->group(function () {
    Route::get('/chat', function () {
        return view('chat-ai');
    });

    Route::post('/chat', [ChatController::class, 'chat']);

    Route::post('/chat/new', function () {
    session()->forget('chat_history');
    session()->forget('current_chat_id');
    return response()->json(['status' => 'ok']);
});

    Route::post('/chat/load/{id}', function ($id) {
    $sessions = session('chat_sessions', []);
    foreach ($sessions as $s) {
        if ((string)$s['id'] === (string)$id) {
            session(['chat_history' => $s['messages'] ?? []]);
            session(['current_chat_id' => $s['id']]);
            return response()->json(['status' => 'ok', 'messages' => $s['messages'] ?? []]);
        }
    }
    return response()->json(['status' => 'not found'], 404);
});

    // Ambil semua histori
    Route::get('/chat/history', function () {
        $sessions = session('chat_sessions', []);
        
        // Format ulang untuk frontend
        $formatted = array_map(function($s) {
            return [
                'id'        => $s['id'],
                'title'     => $s['title'] ?? 'Obrolan Baru',
                'messages'  => $s['messages'] ?? [],
                'createdAt' => $s['createdAt'] ?? now()->toDateTimeString(),
            ];
        }, $sessions);

        return response()->json(array_values($formatted));
    });

    // Hapus satu sesi
    Route::delete('/chat/{id}', function ($id) {
        $sessions = session('chat_sessions', []);
        
        $sessions = array_filter($sessions, function($s) use ($id) {
            return (string)$s['id'] !== (string)$id;
        });
        
        session(['chat_sessions' => array_values($sessions)]);
        
        // Jika yang dihapus adalah sesi aktif, reset
        if (session('current_chat_id') == $id) {
            session()->forget('chat_history');
            session()->forget('current_chat_id');
        }

        return response()->json(['status' => 'ok']);
    });
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

