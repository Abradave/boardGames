<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BoardGame>
 */
class BoardGameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "bg_name" => fake()->unique()->word(),
            "min_players" => fake()->numberBetween(1, 3),
            "max_players" => fake()->numberBetween(4, 10),
            "description" => fake()->paragraph(3)
        ];
    }
}
