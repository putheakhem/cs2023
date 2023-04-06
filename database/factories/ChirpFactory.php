<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChirpFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'message' => fake()->text(),
        ];
    }
}
