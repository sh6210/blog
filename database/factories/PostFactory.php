<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Utility\ProjectConstants;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->title;
        $content = $this->faker->paragraph;
        $author = ($author = Author::inRandomOrder()->first()) ? $author->id : self::factoryForModel(Author::class)->create();
        $category = ($category = Category::inRandomOrder()->first()) ? $category->id : self::factoryForModel(Category::class)->create();

        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'type' => array_rand(ProjectConstants::$postTypes),
            'title' => $title,
            'content' => $content,
            'slug' => createSlugFrom($title),
            'is_at_home' => $this->faker->boolean,
            'is_at_slider' => $this->faker->boolean,
            'excerpt' => Str::words($content, 5),
            'author_id' => $author,
            'allow_comment' => $this->faker->boolean,
            'category_id' => $category,
            'publish_at' => now()->nextWeekday()
        ];
    }
}
