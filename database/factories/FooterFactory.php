<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'status' => ProjectConstants::STATUS_ACTIVE,
            'logo' => $this->faker->url,
            'content' => $this->faker->paragraph,
            'copyright' => $this->faker->sentence,
        ];
    }
}
