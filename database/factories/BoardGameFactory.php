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
            "bg_name" => fake()->unique()->randomElement(['Brass: Birmingham', 'Ark Nova', 'Terraforming Mars', 'Dune: Imperium', 'Gaia Project', 'Civilization', 'Great Western Trail', 'Scythe', 'Wingspan', 'Arnak', 'Everdell', 'Barrage', 'Viticulture', 'Cascadia', 'On Mars', 'Lisboa', 'Azul', 'Teotihuacan', 'Robinson Crusoe', 'Ticket to Ride']),
            "min_players" => fake()->numberBetween(1, 2),
            "max_players" => fake()->numberBetween(4, 10),
            "description" => fake()->paragraph(3)
        ];
    }
}
