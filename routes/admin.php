<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [AdminAuthController::class, 'login'])->name('admin');
Route::get('admin/login',[AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login-post');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth-admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resources([
        'category' => CategoryController::class,
        'author' => AuthorController::class,
        'post' => PostController::class,
        'tag' => TagController::class,
        'book' => BookController::class,
        'comment' => CommentController::class
    ]);
});
