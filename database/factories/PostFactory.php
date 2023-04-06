<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'summary' => fake()->realText(),
            'content' => fake()->paragraphs()
        ];
    }
}
