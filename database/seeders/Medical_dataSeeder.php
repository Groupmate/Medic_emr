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

        for ($loop = 0; $loop < 15; $loop++) {

            DB::table("medical_datas")->insert([
                "hospital_id"=>$faker->numberBetween(1,10),
                "patient_id"=>$faker->numberBetween(1,10),
                "user_id"=>$faker->numberBetween(1,1),
                "symptom"=>$faker->randomElement(["fever and chills", "swelling of neck or neck glands", "sore throat","painful swallowing", "hoarseness", "nausea and vomiting","especially bloody vomiting"]), 
                "diagnosis_info"=>$faker->randomElement(["2015, there were about 212 million reported cases of malaria in the world","he reality is that diarrheal diseases are the number one killer of children under five in the world"]), 
                "numerical_info"=>$faker->randomElement(["100ml blood","20ml salt","50mg parcentamol"]),
                "description"=>$faker->randomElement(["2015, there were about 212 million reported cases of malaria in the world","he reality is that diarrheal diseases are the number one killer of children under five in the world"]), 
                "picture"=>$faker->randomElement(["2015, there were about","he reality is that diarrheal "]), 
                "disease"=>$faker->	randomElement(["Anthrax","Avian", "Influenza" , "Chikungunya" , "Cholera" , "Heatitis-B(HBV)", "Malari"]),
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),
            ]);
       }
    }
}

