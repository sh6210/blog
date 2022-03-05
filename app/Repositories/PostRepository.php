<?php

namespace App\Repositories;

use App\Models\Post;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class PostRepository
{
    use OnlyStore, OnlyUpdate;

    protected string $model = Post::class;

    /*public function getTypes()
    {
        return $this->model::select('id', 'type')->distinct()->get();
    }*/

    public function getListData($perPage, $search)
    {
        return $this->model::with('category', 'author')->latest()->paginate($perPage);
    }
}
