<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->title;

        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'title' => $title,
            'description' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'slug' => createSlugFrom($title),
            'play_list_link' => $this->faker->url,
            'icon' => $this->faker->url,
            'order' => $this->faker->randomDigit(),
        ];
    }
}
