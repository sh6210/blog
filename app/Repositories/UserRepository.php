<?php

namespace App\Repositories;

use App\Models\User;
use App\Traits\OnlyStore;
use App\Traits\OnlyUpdate;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    use OnlyStore, OnlyUpdate;

    private string $model = User::class;

    public function getListData($perPage, $search)
    {
        return $this->model::withTrashed()->with('roles')->paginate($perPage);
    }

    public function getPermissions(): \Illuminate\Support\Collection
    {
//        return User::with('roles:id,name', 'roles.permissions:id,name')->whereId(61)->get();
        return DB::table('users as u')
            ->join('role_user as ru', 'ru.user_id', '=', 'u.id')
            ->join('permission_role as pr', 'pr.role_id', '=', 'ru.role_id')
            ->join('permissions as p', 'p.id', '=', 'pr.permission_id')
            ->where('u.id', adminAuth()->id())
            ->select('p.id as id', 'p.name as name')
            ->get();
    }
}
