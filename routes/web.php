<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\PasswordResetLinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'form'])->name('login.form');
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');

Route::get('/register', [RegisteredUserController::class, 'form'])->name('user.register.form');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.register');

Route::get('forgot-password', [PasswordResetLinkController::class, 'forgot'])->name('password.forgot');
Route::post('forgot-password', [PasswordResetLinkController::class, 'send'])->name('password.send');

Route::get('reset-password/{token}', [NewPasswordController::class, 'update'])->name('password.update');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');