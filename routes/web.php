<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('chat');
    });

    Route::post('/chat', [ChatController::class, 'chat']);

    Route::post('/chat/new', function () {
        session()->forget('chat_history');
        return response()->json(['status' => 'ok']);
    });

    Route::get('/chat/history', function () {
        return response()->json(session('chat_sessions', []));
    });
});
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


