<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Collection;

class UserPermissionService
{
    private UserRepository $repo;
    private Collection $permissions;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
        $this->prepareUserPermissions();
    }

    private function prepareUserPermissions(): void
    {
        $this->permissions = $this->repo->getPermissions();
    }

    public function getUserPermissions(): Collection
    {
        return $this->permissions;
    }
}
