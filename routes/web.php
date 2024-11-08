<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class, 'RegisterForm'])->name('user.register-form');
Route::post('/signUp', [UserController::class, 'SignUp'])->name('sign-up');
Route::get('/login', [UserController::class, 'loginForm'])->name('user.login-form');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashbaord'])->name('user.dashboard');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');