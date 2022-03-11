<?php

namespace Database\Factories;

use App\Models\Editor;
use App\Models\Publisher;
use App\Models\Writer;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $name = $this->faker->name;

        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'name' => $name,
            'url' => $this->faker->url,
            'is_at_home' => array_rand(ProjectConstants::$yesNo),
            'cover_image' => $this->faker->url,
            'writer_id' => ($writer = Writer::inRandomOrder()->first()) ? $writer->id : Writer::factory()->create(),
            'editor_id' => ($editor = Editor::inRandomOrder()->first()) ? $editor->id : Editor::factory()->create(),
            'publisher_id' => ($publisher = Publisher::inRandomOrder()->first()) ? $publisher->id : Publisher::factory()->create(),
            'excerpt' => '',
            'description' => $this->faker->paragraph,
            'published_at' => $this->faker->dateTimeThisCentury(),
            'download_link' => $this->faker->url,
            'read_link' => $this->faker->url,
            'buy_link' => $this->faker->url,
        ];
    }
}
