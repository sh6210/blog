<?php

namespace Database\Factories;

use App\Models\Author;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'title' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'author_id' => ($author = Author::first()) ? $author->id : Author::factory()->create(),
            'theme' => array_rand(ProjectConstants::$themeColors),
            'favicon' => '',
            'keywords' => 'islam,hadis'
        ];
    }
}
