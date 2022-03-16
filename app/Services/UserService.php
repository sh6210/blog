<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Traits\CommonServiceElements;
use App\Utility\ProjectConstants;
use Illuminate\Support\Facades\DB;

class UserService
{
    use CommonServiceElements;

    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function update(User $user, array $data)
    {
        $this->storeOrUpdate($data, $user);
    }

    public function store(array $data)
    {
        $this->storeOrUpdate($data, null);
    }

    private function storeOrUpdate($data, ?User $user)
    {
        $role = (int) $data['role'];
        unset($data['role']);

        $status = ($data['status'] !== ProjectConstants::STATUS_ACTIVE);
        unset($data['status']);

        try{
            DB::beginTransaction();
            /** @var User $user */
            $user = $user ? $this->repo->update($user, $data) : $this->repo->store($data);

            $user->roles()->sync([$role]);

            if ($status) $user->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
