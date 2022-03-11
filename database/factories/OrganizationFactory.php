<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $description = $this->faker->paragraph;

        return [
            'status'      => array_rand(ProjectConstants::$statuses),
            'name'        => $this->faker->name,
            'is_at_home'  => array_rand(ProjectConstants::$yesNo),
            'logo'        => $this->faker->url,
            'description' => $description,
            'excerpt'     => createExcerpt($description),
            'email'       => $this->faker->safeEmail,
            'website'     => $this->faker->url,
            'social'      => ['facebook' => 'facebook_link', 'youtube' => 'youtube_link'],
        ];
    }
}
