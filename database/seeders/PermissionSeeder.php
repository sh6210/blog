<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Utility\ProjectConstants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['create', 'read', 'update', 'delete'];

        foreach (ProjectConstants::$modulePermissions as $permission) {
            foreach ($options as $option) {
                $custom[] = str_replace(' ', '_', strtolower($permission)) . '_' . $option;
            }
        }

        foreach (ProjectConstants::$singlePermissions as $permission) {
            $custom[] = str_replace(' ', '_', strtolower($permission));
        }

        foreach ($custom as $each) {
            $results[] = [
                'name' => $each,
                'display_name' => ucwords(str_replace('_', ' ', $each)),
            ];
        }

        DB::table((new Permission())->getTable())->insert($results ?? []);
    }
}
