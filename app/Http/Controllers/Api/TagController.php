<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TagController
{
    public function index(): AnonymousResourceCollection
    {
        return TagResource::collection(Tag::all());
    }
}
