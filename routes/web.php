<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth routes

Route::name('auth.')->middleware('guest')->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->name('profile.')->prefix('profile')->group(function () {
    Route::put('update', [ProfileController::class, 'update'])->name('update');
    Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
});