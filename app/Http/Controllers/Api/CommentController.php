<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CommentController
{
    private CommentService $service;

    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    public function index(): AnonymousResourceCollection
    {
        return CommentResource::collection(Comment::paginate());
    }

    public function store(CommentRequest $request): CommentResource
    {
        $comment = $this->service->store($request->validated());
        return new CommentResource(Comment::with('creator')->whereId($comment->id)->first());
    }
}
