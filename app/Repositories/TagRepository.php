<?php

namespace App\Repositories;

use App\Interfaces\ListData;
use App\Models\Tag;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class TagRepository implements ListData
{
    use OnlyStore, OnlyUpdate;

    private string $model = Tag::class;

    public function getListData($perPage, $search)
    {
        return $this->model::latest()->paginate($perPage);
    }
}
