<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'title' => $this->faker->title,
            'sub_title' => $this->faker->title,
            'text' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->image,
        ];
    }
}
