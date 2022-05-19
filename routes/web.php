<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Home\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});
// });

Route::middleware('auth')->group(function () {
    // Home
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });
    // Post
    Route::controller(PostController::class)->group(function () {
        Route::get('/post', 'index')->name('post.index');
    });
    // User
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
    });
    // Comment
    Route::controller(CommentController::class)->group(function () {
        Route::get('/comment', 'index')->name('comment.index');
    });
});
