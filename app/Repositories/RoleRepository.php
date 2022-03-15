<?php

namespace App\Repositories;

use App\Models\Role;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;

class RoleRepository
{
    use OnlyStore, OnlyUpdate;

    private string $model = Role::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('permissions')->latest()->paginate($perPage);
    }
}
