<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// ============================================================
// PUBLIC ROUTES (Tidak perlu login)
// ============================================================

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami');

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/berlangganan', function () {
    return view('berlangganan');
})->name('berlangganan');

// ============================================================
// AUTH ROUTES (Login/Register untuk guest)
// ============================================================

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ============================================================
// PROTECTED ROUTES (Harus login)
// ============================================================

Route::middleware('auth')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/account', function () {
        return view('account');
    })->name('account');
    
    Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('dashboard.notifications');
    Route::get('/privacy-security', [DashboardController::class, 'privacySecurity'])->name('dashboard.privacy-security');
    Route::get('/about', [DashboardController::class, 'about'])->name('dashboard.about');
    Route::get('/help', [DashboardController::class, 'help'])->name('dashboard.help');
    
    Route::patch('/account/update', [AuthController::class, 'updateProfile'])->name('account.update');
    Route::delete('/account', [ProfileController::class, 'destroy'])->name('account.destroy');
    Route::post('/account/update', [AuthController::class, 'updateProfile'])->name('account.update');
    
    // ============================================================
    // CHAT AI ROUTES (Harus login)
    // ============================================================
    
    Route::get('/chat', function () {
        return view('chat-ai');
    })->name('chat');
    
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
    
    Route::get('/chat/history', function () {
        $sessions = session('chat_sessions', []);
        
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
    
    Route::delete('/chat/{id}', function ($id) {
        $sessions = session('chat_sessions', []);
        
        $sessions = array_filter($sessions, function($s) use ($id) {
            return (string)$s['id'] !== (string)$id;
        });
        
        session(['chat_sessions' => array_values($sessions)]);
        
        if (session('current_chat_id') == $id) {
            session()->forget('chat_history');
            session()->forget('current_chat_id');
        }

        return response()->json(['status' => 'ok']);
    });
});