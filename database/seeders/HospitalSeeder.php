<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 20; $loop++) {

            DB::table("hospitals")->insert([
                "name"=>$faker->name(),
                "user_id"=>$faker->numberBetween(1,1),	
                "type"=>$faker->randomElement(["Private Hospitals","Gov-Hospital"," Mother and Child Health Hospital",
                                                "Specialized Hospital"," Internal Medicine Clini","International Cardiovascular and Medical Center"]),          
                "region"=>$faker->randomElement([ 
                    "Addis Ababa Chartered City",
                    "Dire Dawa Chartered City",
                    "Amhara Region",
                    "Afar Region",
                    "Benishangul-Gumuz Region",
                    "Gambella Region",
                    "Harari Region",
                    "Oromia Region",
                    "Sidama Region",
                    "Somali Region",
                    "SNNPR Region",
                    "SWENP Region" ]),	
                "zone"=>$faker->word(),
                "city"=>$faker->word(),	
                "woreda"=>$faker->word(),	
                "kebele"=>$faker->word(),	
                "created_at"=>$faker->date(),	
                "updated_at"=>$faker->date(),	
            ]);
       }
   }
}