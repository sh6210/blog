<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * lk,.
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            AuthorSeeder::class,
            SiteInfoSeeder::class,
            GeneralInfoSeeder::class,
            TagSeeder::class,
            WriterSeeder::class,
            EditorSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            OrganizationSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            BannerSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            DonationSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
