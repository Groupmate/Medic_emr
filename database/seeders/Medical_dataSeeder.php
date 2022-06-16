<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Medical_dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 150; $loop++) {

            DB::table("medical_datas")->insert([
                "hospital_id"=>$faker->numberBetween(1,50),
                "patient_id"=>$faker->numberBetween(1,50),
                "user_id"=>$faker->numberBetween(1,10),
                "symptom"=>$faker->randomElement(['["Anthrax"]','["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']),
                "diagnosis_info"=>$faker->randomElement(['["Anthrax"]','["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']),
                "numerical_info"=>$faker->randomElement(['["Anthrax"]','["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']),
                "description"=>$faker->randomElement(['["Anthrax"]','["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']), 
                "picture"=>$faker->randomElement(['["Anthrax"]', '["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']),
                "disease"=>$faker->	randomElement(['["Anthrax"]','["Influenza"]'  ,'["Cholera"]', '["Heatitis-B(HBV)"]', '["Malari"]']),
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),
            ]);
       }
    }
}

