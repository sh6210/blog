<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [AdminAuthController::class, 'login'])->name('admin')->middleware('acl');
Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login-post');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth-admin', 'acl']], function()
{
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('organization', [OrganizationController::class, 'index'])->name('admin.organization');
    Route::get('about', [AboutController::class, 'index'])->name('admin.about');
    Route::get('contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('footer', [FooterController::class, 'index'])->name('admin.footer');
    Route::get('donation', [DonationController::class, 'index'])->name('admin.donation');
    Route::get('download-attachment', [GeneralController::class, 'downloadAttachment'])->name('download.attachment');

    Route::resources([
        'category' => CategoryController::class,
        'author'   => AuthorController::class,
        'post'     => PostController::class,
        'tag'      => TagController::class,
        'book'     => BookController::class,
        'comment'  => CommentController::class,
        'role'     => RoleController::class,
        'user'     => UserController::class,
        'menu'     => MenuController::class,
    ]);
});
