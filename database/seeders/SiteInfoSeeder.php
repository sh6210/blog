<?php

namespace Database\Seeders;

use App\Models\SiteInfo;
use Illuminate\Database\Seeder;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteInfo::factory()->create();
    }
}
