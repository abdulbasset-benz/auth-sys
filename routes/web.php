<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', [UserController::class, 'home'])->name('auth.home');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('auth.dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'RegisterForm'])->name('auth.register');
    Route::post('/register', [UserController::class, 'registerUser'])->name('register-user');
    Route::get('/login', [UserController::class, 'loginform'])->name('auth.form');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});


// Profile routes 

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.profile');
Route::put('/profile', [ProfileController::class, 'updateUserName'])->name('profile.update');