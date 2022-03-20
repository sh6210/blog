<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class MenuRepository
{
    use OnlyStore, OnlyUpdate;

    private string $model = Menu::class;

    public function getListData($perPage, $search)
    {
        return $this->model::latest()->paginate($perPage);
    }
}
