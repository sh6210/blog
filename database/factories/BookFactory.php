<?php

namespace Database\Factories;

use App\Models\Book;
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
            'writer_id' => ($writer = Writer::inRandomOrder()->first()) ? $writer->id : Writer::factory()->create(),
            'publisher_id' => ($publisher = Publisher::inRandomOrder()->first()) ? $publisher->id : Publisher::factory()->create(),
            'excerpt' => '',
            'description' => $this->faker->paragraph,
            'published_at' => $this->faker->dateTimeThisCentury(),
            'download_link' => $this->faker->url,
            'read_link' => $this->faker->url,
            'buy_link' => $this->faker->url,
        ];
    }

    public function configure(): BookFactory
    {
        return $this->afterCreating(function (Book $book) {
            $editors = Editor::inRandomOrder()->limit(2)->get();
            $book->editors()->saveMany($editors);
        });
    }
}
