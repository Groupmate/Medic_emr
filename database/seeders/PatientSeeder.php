<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //
         $faker = \Faker\Factory::create();

         for ($loop = 0; $loop < 25; $loop++) {
 
             DB::table("patients")->insert([
                "first_name"=>$faker->word(),
                "middle_name"=>$faker->word(),
                "last_name"=>$faker->word(),	
                "national_id"=>$faker->unique()->word(),	
                "email"=>$faker->email(),	
                "phone_no"=>$faker->numberBetween(251900000000,251999999999),
                "sex"=>$faker->randomElement(["Male","Female"]),
                "date_of_birth"=>$faker->date(),	
                "profile_picture"=>$faker->randomElement(["Pending","Active","On Going","Passive"] ),	
                "religion"=>$faker->randomElement(["christian","Muslim","Etist","Passive"] ),	
                "blood_group"=>$faker->randomElement(["A","AB","O","B"] ),
                "region"=>$faker->randomElement([   "Addis Ababa Chartered City",
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
                                                    "SWENP Region"
                                                ]),	
                
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