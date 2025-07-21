<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/register', function () {
    return view('auth.register');
});

 Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
 Route::post('login', [AuthController::class, 'login']);
 Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
 Route::post('register', [RegisterController::class, 'register']);
