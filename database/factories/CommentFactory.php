<?php

namespace Database\Factories;

use App\Models\Post;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $post = Post::inRandomOrder()->first();
        $postComments = $post->comments()->pluck('id', 'id')->toArray();

        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'post_id' => $post->id,
            'parent_comment_id' => count($postComments) ? array_rand($postComments) : null,
            'content' => $this->faker->sentence,
            'link' => $this->faker->url,
        ];
    }
}
