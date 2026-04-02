<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dentists')->insert([
            [
                'first_name'      => 'Ricardo',
                'last_name'       => 'Santos',
                'license_no'      => '12345',
                'specialization'  => 'General Dentistry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'first_name'      => 'Maria',
                'last_name'       => 'Reyes',
                'license_no'      => '23456',
                'specialization'  => 'Orthodontics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name'      => 'Jose',
                'last_name'       => 'Garcia',
                'license_no'      => '34567',
                'specialization'  => 'Pediatric Dentistry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
