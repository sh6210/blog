<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
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
            'name' => $this->faker->name,
            'page_title' => $this->faker->title,
            'summary' => $this->faker->sentence,
            'image' => $this->faker->url,
            'content' => $this->faker->paragraph,
            'story_title' => $this->faker->title,
            'story_content' => $this->faker->paragraph,
            'education_title' => $this->faker->title,
            'education_content' => $this->faker->paragraph,
            'research_title' => $this->faker->title,
            'research_content' => $this->faker->paragraph,
            'experience_title' => $this->faker->title,
            'experience_content' => $this->faker->paragraph,
        ];
    }
}
