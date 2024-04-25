<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory(15)->create();
        DB::table('employees')->insert([
            ['e_name' => 'Teszt Elek', 'e_email' => 'teszt@gkn.com', 'e_password' => Hash::make('12345678'), 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['e_name' => 'Admin Admin', 'e_email' => 'admin@gkn.com', 'e_password' => Hash::make('admin123'), 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        ]);
    }
}
