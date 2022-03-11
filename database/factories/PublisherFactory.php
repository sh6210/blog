<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
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
            'name'   => $this->faker->name,
            'phone'  => $this->faker->phoneNumber,
            'email'  => $this->faker->safeEmail,
            'image'  => $this->faker->url,
        ];
    }
}
