<?php

namespace Database\Factories;

use App\Models\BoardGame;
use App\Models\Employee;
use App\Models\Guest;
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
        $allEmployeeIds = Employee::all()->pluck('id');
        //$allGuestsIds = Guest::all()->pluck('id');
        //$allBoardGamesIds = BoardGame::all()->pluck('id');
        return [
            "appointment" => fake()->dateTimeBetween('now', '+2 weeks'),
            "employee_id" => fake()->randomElement($allEmployeeIds),
            "booked" => fake()->numberBetween(0, 0),
            //"guest_id" => fake()->randomElement($allGuestsIds),
            //"board_game_id" => fake()->randomElement($allBoardGamesIds),
            //"number_of_players" => fake()->numberBetween(2, 4)
        ];
    }
}
