<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Resources\BannerResource;
use App\Http\Resources\BookResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CommentResource;
use App\Http\Resources\GeneralInfoResource;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\SiteInfoResource;
use App\Http\Resources\TagResource;
use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use App\Models\Comment;
use App\Models\GeneralInfo;
use App\Models\Organization;
use App\Models\SiteInfo;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::post('/sanctum/token', function(Request $request)
{
    $request->validate([
        'email'       => 'required|email',
        'password'    => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

Route::middleware('auth:sanctum')->group(function()
{
    Route::get('user', function(Request $request)
    {
        return $request->user();
    });

    Route::get('site-info', function()
    {
        return new SiteInfoResource(SiteInfo::with('author')->first());
    });

    Route::get('general-info', function()
    {
        return new GeneralInfoResource(GeneralInfo::first());
    });

    Route::get('categories', function()
    {
        return CategoryResource::collection(Category::all());
    });

    Route::get('tags', function()
    {
        return TagResource::collection(Tag::all());
    });

    Route::get('books', function()
    {
        return BookResource::collection(Book::paginate());
    });

    Route::get('books/{book}', function(Book $book)
    {
        return new BookResource($book);
    });

    Route::get('organization', function()
    {
        return new OrganizationResource(Organization::first());
    });

    Route::get('comments', function()
    {
        return CommentResource::collection(Comment::paginate());
    });

    Route::post('comment', [CommentController::class, 'store']);

    Route::get('home', [GeneralController::class, 'home']);

    Route::get('banner', function()
    {
        return BannerResource::collection(Banner::all());
    });

    Route::get('slider', [GeneralController::class, 'slider']);

    Route::get('menus', [GeneralController::class, 'menus']);

    Route::get('about', [GeneralController::class, 'about']);

    Route::get('contact', [GeneralController::class, 'contact']);

    Route::get('footer', [GeneralController::class, 'footer']);

    Route::get('donation', [GeneralController::class, 'donation']);
});
