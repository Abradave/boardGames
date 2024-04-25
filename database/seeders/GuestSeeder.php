<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::factory(15)->create();
        DB::table('guests')->insert([
            ['g_username' => 'gipszjakab', 'g_password' => Hash::make("gipsz1234"),'g_name' => 'Gipsz Jakab', 'g_email' => 'gipsz@gipsz.hu','g_phone_number' => '063012345678'],
           
        ]);
    }
}