<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\ArticleController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('management')->name('management.')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('{user}', [UserController::class, 'update'])->name('update');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('', [UserController::class, 'store'])->name('store');
        Route::get('{user}/delete', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('articles')->name('articles.')->group(function () {
        Route::get('create', [ArticleController::class, 'create'])->name('create');
        Route::post('', [ArticleController::class, 'store'])->name('store');
    });

    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('', [CategoryController::class, 'store'])->name('store');
        Route::get('{category}/delete', [CategoryController::class, 'destroy'])->name('destroy');
    });
});

Route::get('blade/{blade}', function (string $blade) {
    return view($blade);
});

Route::resource('users', UserController::class);