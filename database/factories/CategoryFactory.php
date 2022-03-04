<?php

namespace Database\Factories;

use App\Models\Category;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->name;
        return [
            'status' => array_rand(ProjectConstants::$statuses),
            'name' => $name,
            'slug' => createSlugFrom($name),
            'description' => $this->faker->sentence,
            'parent_category_id' => optional(Category::inRandomOrder()->first())->id,
        ];
    }
}
