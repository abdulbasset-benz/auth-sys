<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.welcome');
});

Route::get('/register', [UserController::class, 'RegisterForm'])->name('auth.register');
Route::post('/register', [UserController::class, 'registerUser'])->name('register-user');
Route::get('/login', [UserController::class, 'loginForm'])->name('login-form');
Route::post('/login', [UserController::class, 'login'])->name('auth.login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('auth.dashboard');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');