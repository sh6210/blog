<?php

namespace App\Repositories;

use App\Interfaces\ListData;
use App\Models\Author;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class AuthorRepository implements ListData
{
    use OnlyStore, OnlyUpdate;

    protected string $model = Author::class;

    public function getListData($perPage, $search)
    {
        return $this->model::latest()->paginate($perPage);
    }

    public function getAuthors(array $fields = [])
    {
        return count($fields) ? $this->model::select($fields)->get() : $this->model::all();
    }
}
