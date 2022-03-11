<?php

namespace App\Services;

use App\Models\Comment;
use App\Repositories\CommentRepository;
use App\Traits\CommonServiceElements;
use App\Traits\OnlyStore;
use Illuminate\Database\Eloquent\Model;

class CommentService
{
    use CommonServiceElements;

    private CommentRepository $repo;

    public function __construct(CommentRepository $repo)
    {
        $this->repo = $repo;
    }

    public function update(Comment $comment, array $validated)
    {
        $this->repo->update($comment, $validated);
    }

    public function store($validated): Model
    {
        return $this->repo->store($validated);
    }
}
