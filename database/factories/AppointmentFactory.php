<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "appointment" => fake()->dateTimeBetween('now', '+2 weeks'),
            "employee_id" => fake()->numberBetween(1, 15),
            "booked" => fake()->numberBetween(1, 1),
            "guest_id" => fake()->numberBetween(1, 15),
            "board_game_id" => fake()->numberBetween(1, 15),
            "number_of_players" => fake()->numberBetween(2, 4)
        ];
    }
}
