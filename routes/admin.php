<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [AdminAuthController::class, 'login'])->name('admin');
Route::get('admin/login',[AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login-post');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth-admin'], function () {

});
