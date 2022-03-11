<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
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
            'page_title' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'address' => $this->faker->address
        ];
    }
}
