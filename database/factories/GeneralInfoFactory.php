<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeneralInfoFactory extends Factory
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
            'name' => $this->faker->domainName,
            'site_logo' => '',
            'profile_photo_url' => '',
            'social' => ['email' => 'email@sample.com', 'youtube' => 'youtube_link', 'facebook' => 'facebook_link', 'twitter' => 'twitter_link']
        ];
    }
}
