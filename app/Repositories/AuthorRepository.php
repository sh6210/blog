<?php

namespace App\Repositories;

use App\Models\Author;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class AuthorRepository
{
    use OnlyStore, OnlyUpdate;

    protected string $model = Author::class;

    public function getListData($perPage, $search)
    {
        return $this->model::latest()->paginate($perPage);
    }
}
