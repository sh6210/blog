<?php

namespace App\Repositories;

use App\Models\User;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class UserRepository
{
    use OnlyStore, OnlyUpdate;

    private string $model = User::class;

    public function getListData($perPage, $search)
    {
        return $this->model::withTrashed()->with('roles')->paginate($perPage);
    }
}
