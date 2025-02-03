<?php

use App\Http\Controllers\ArticleController as ControllersArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\ArticleController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\CommentController as PanelCommentController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIsAdmin;
use App\Http\Middleware\CheckIsAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth routes

Route::name('auth.')->middleware('guest')->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(CheckIsAuth::class)->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->name('profile.')->prefix('profile')->group(function () {
    Route::put('update', [ProfileController::class, 'update'])->name('update');
    Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
});

Route::prefix('management')->name('management.')->middleware([CheckIsAuth::class, CheckIsAdmin::class])->group(function () {
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
        Route::get('', [ArticleController::class, 'index'])->name('index');
        Route::get('{article}/edit', [ArticleController::class, 'edit'])->name('edit');
        Route::put('{article}', [ArticleController::class, 'update'])->name('update');
        Route::get('create', [ArticleController::class, 'create'])->name('create');
        Route::post('', [ArticleController::class, 'store'])->name('store');
        Route::get('{article}/delete', [ArticleController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('', [CategoryController::class, 'store'])->name('store');
        Route::get('{category}/delete', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('comments')->name('comments.')->group(function () {
        Route::get('', [PanelCommentController::class, 'index'])->name('index');
        Route::get('{comment}/verify', [PanelCommentController::class, 'verify'])->name('verify');
        Route::get('{comment}/reject', [PanelCommentController::class, 'reject'])->name('reject');
    });
});

Route::prefix('articles')->name('articles.')->group(function () {
    Route::get('', [ControllersArticleController::class, 'index'])->name('index');
    Route::get('{article}', [ControllersArticleController::class, 'show'])->name('show');
});

Route::prefix('comments')->name('comments.')->middleware(CheckIsAuth::class)->group(function () {
    Route::post('{article}', [CommentController::class, 'store'])->name('store');
});

Route::get('blade/{blade}', function (string $blade) {
    return view($blade);
});

Route::resource('users', UserController::class);