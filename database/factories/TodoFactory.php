<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 100),
            'title' => ucwords($this->faker->sentence()),
            'is_done' => rand(0, 1),
            'category_id' => Category::factory(),
        ];
    }
}
