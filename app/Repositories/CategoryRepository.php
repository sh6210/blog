<?php

namespace App\Repositories;

use App\Interfaces\ListData;
use App\Models\Category;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class CategoryRepository implements ListData
{
    use OnlyStore, OnlyUpdate;

    protected string $model = Category::class;

    public function getCategories(array $fields = [], $exceptIds = [])
    {
        $builder = $this->model::whereNotIn('id', $exceptIds);

        return count($fields) ? $builder->select($fields)->get() : $builder->get();
    }

    public function getListData($perPage, $search)
    {
       return $this->model::with('parentCategory')->latest()->paginate($perPage);
    }
}
