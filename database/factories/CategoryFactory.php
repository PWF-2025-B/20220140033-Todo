<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->word()),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
