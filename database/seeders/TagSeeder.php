<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Utility\ProjectConstants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['islam', 'hadis', 'sunna'];

        foreach ($tags as $tag) {
            $custom[] = [
                'status' => array_rand(ProjectConstants::$statuses),
                'name' => $tag,
                'slug' => createSlugFrom($tag),
            ];
        }

        DB::table((new Tag())->getTable())->insert($custom ?? []);
    }
}
