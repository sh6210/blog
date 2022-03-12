<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/sanctum/token', [AuthController::class, 'createToken']);

Route::middleware('auth:sanctum')->prefix('v1')->group(function()
{
    Route::get('user', [GeneralController::class, 'user']);

    Route::get('books', [BookController::class, 'index']);
    Route::get('books/{book}', [BookController::class, 'show']);

    Route::get('comments', [CommentController::class, 'index']);
    Route::post('comment', [CommentController::class, 'store']);

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('tags', [TagController::class, 'index']);

    Route::get('site-info', [GeneralController::class, 'siteInfo']);
    Route::get('general-info', [GeneralController::class, 'generalInfo']);
    Route::get('organization', [GeneralController::class, 'organization']);
    Route::get('home', [GeneralController::class, 'home']);
    Route::get('banner', [GeneralController::class, 'banner']);
    Route::get('slider', [GeneralController::class, 'slider']);
    Route::get('menus', [GeneralController::class, 'menus']);
    Route::get('about', [GeneralController::class, 'about']);
    Route::get('contact', [GeneralController::class, 'contact']);
    Route::get('footer', [GeneralController::class, 'footer']);
    Route::get('donation', [GeneralController::class, 'donation']);
});
