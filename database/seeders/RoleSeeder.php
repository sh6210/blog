<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRoles = ['super_admin' => 'Super Admin'];
        $otherRoles = ['supervisor' => 'Supervisor', 'editor' => 'Editor', 'authorizer' => 'Authorizer'];

        $allPermissions = Permission::all();

        try{
            DB::beginTransaction();
            foreach ($adminRoles as $key => $adminRole) {
                $role               = new Role();
                $role->name         = $key;
                $role->display_name = $adminRole;
                $role->save();

                foreach ($allPermissions as $eachPermission) {
                    $custom[] = [
                        'role_id'       => $role->id,
                        'permission_id' => $eachPermission->id,
                    ];
                }
                DB::table('permission_role')->insert($custom);
                unset($custom);

                $custom = [
                    'role_id' => $role->id,
                    'user_id' => User::whereEmail('admin@email.com')->first()->id,
                ];

                DB::table('role_user')->insert($custom);
                unset($custom);
            }

            foreach ($otherRoles as $key => $otherRole) {
                $role               = new Role();
                $role->name         = $key;
                $role->display_name = $otherRole;
                $role->save();

                $randomPermissions = Permission::inRandomOrder()->limit(5)->get();
                foreach ($randomPermissions as $eachPermission) {
                    $custom[] = [
                        'role_id'       => $role->id,
                        'permission_id' => $eachPermission->id,
                    ];
                }

                DB::table('permission_role')->insert($custom);
                unset($custom);

                $custom = [
                    'role_id' => $role->id,
                    'user_id' => User::inRandomOrder()->where('email', '!=', 'admin@gmail.com')->first()->id,
                ];

                DB::table('role_user')->insert($custom);
                unset($custom);
            }
            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
            dd($e);
        }
    }
}
