<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BookController
{
    public function index(): AnonymousResourceCollection
    {
        return BookResource::collection(Book::paginate());
    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }
}
