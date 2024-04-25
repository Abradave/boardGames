<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GuestSeeder::class);
        $this->call(BoardGameSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
