<?php

namespace App\Services;

use App\Models\Permission;
use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\DB;

class RoleService
{
    use CommonServiceElements;

    private RoleRepository $repo;

    public function __construct(RoleRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated)
    {
        $this->storeOrUpdate($validated, null);
    }

    public function update(Role $role, array $validated)
    {
        $this->storeOrUpdate($validated, $role);
    }

    private function storeOrUpdate($validated, ?Role $role)
    {
        if (isset($validated['permissions'])){
            $permissions = array_map('intval', $validated['permissions']);
            unset($validated['permissions']);
        }

        try {
            DB::beginTransaction();

            /** @var Role $role */
            $role = !$role ? $this->repo->store($validated) : $this->repo->update($role, $validated);

            $role->permissions()->sync($permissions ?? []);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function permissions(): array
    {
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            $pattern = '/.+_(create|read|update|delete)$/';
            if (preg_match($pattern, $permission->name, $match)) {
                $item                    = ucwords(str_replace("_{$match[1]}", '', $permission->name));
                $custom['crud'][$item][] = $permission;
            } else {
                $custom['single'][] = $permission;
            }
        }

        return $custom ?? [];
    }

}
