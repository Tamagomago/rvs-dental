<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medical_questions')->insert([
            [
                'question' => 'Are you in good health?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Are you under medical treatment now? If so, what is the condition being treated?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Have you ever had serious illness or surgical operation? If so, what illness or operation?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Have you ever been hospitalized? If so, when and why?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Are you taking any prescription/non-prescription medication? If so, please specify.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Do you use cigarettes/tobacco products?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Do you use alcohol, cocaine or any dangerous drugs?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Are you allergic to any of the following: Local Anesthetic (ex. Lidocaine), Penicillin Antibiotics, Sulfa drugs, Aspirin, Latex, Other?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Bleeding time?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'For women only: Are you pregnant?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'For women only: Are you nursing?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'For women only: Are you taking birth control pills?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Blood type?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Blood pressure?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
