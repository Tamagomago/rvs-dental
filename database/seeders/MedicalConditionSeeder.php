<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medical_conditions')->insert([
            [
                'condition_name' => 'High blood pressure',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Heart disease',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Diabetes',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Tuberculosis',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Asthma',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Anemia',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Goiter',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Epilepsy / Convulsions',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Stroke',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Chest pain',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Heart surgery',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Heart attack',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Low blood pressure',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Kidney disease',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Rheumatic fever',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Hepatitis / Jaundice',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Respiratory problems',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'AIDS or HIV Infection',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Sexually transmitted disease',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Stomach troubles / Ulcers',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Heart murmur',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Hepatitis / Liver disease',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Swollen ankles',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Radiation therapy',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Cancer / Tumors',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Fainting seizure',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Rapid weight loss',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Joint replacement / Implant',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Hay fever / Allergies',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Head injuries',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Arthritis / Rheumatism',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Blood disease',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Bleeding problems',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Emphysema',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Angina',
                'updated_at' => now(), 
                'created_at' => now()
            ],
            [
                'condition_name' => 'Others',
                'updated_at' => now(), 
                'created_at' => now()
            ],
        ]);
    }
}
