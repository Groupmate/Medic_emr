<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {  
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 5;  $loop++) {

            DB::table("appointments")->insert([ 
                "doctor_id"=>$faker->numberBetween(1,10),
                "patient_id"=>$faker->numberBetween(1,10), 
                "issue_date"=>$faker->dateTime(),
                "visit_date"=>$faker->dateTime(),	
                "descrpition"=>$faker->randomElement(["Pssfend", "Activa","Onagd"]),	
                "status"=>$faker->randomElement(["Pending","Active","On Going","Passive"]),
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),	 
            ]);        
        }
    }
} 