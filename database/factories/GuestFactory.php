<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "g_username" => fake()->userName(),
            "g_password" => fake()->password(),
            "g_name" => fake()->name(),
            "g_email" => fake()->email(),
            "g_phone_number" => fake()->phoneNumber()
        ];
    }
}
