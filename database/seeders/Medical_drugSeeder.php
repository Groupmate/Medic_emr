<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Medical_drugSeeder extends Seeder
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

            DB::table("medical_drugs")->insert([
                "hospital_id"=>$faker->numberBetween(1,150),
                "name"=>$faker->name(),
                "type"=>$faker->name(),
               "department"=>$faker->randomElement(["Radiology","General Doctor","Eye","Mind","Skeleton","Nerve"]),
                "quantity"=>$faker->numberBetween(1,150),
                "expired_date"=>$faker->date(),
                "photo"=>$faker->word(),	
                "description"=>$faker->randomElement(["2015, there were about 212 million reported cases of malaria in the world","he reality is that diarrheal diseases are the number one killer of children under five in the world"]), 
                "price"=>$faker->numberBetween(150,5500),
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),
            ]);
        }
        //
    }
}
