<?php

namespace App\Repositories;

use App\Interfaces\ListData;
use App\Models\Comment;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class CommentRepository implements ListData
{
    use OnlyStore, OnlyUpdate;
    protected string $model = Comment::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('post', 'parentComments', 'childComments', 'creator')->paginate($perPage);
    }
}
