<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Patient_wating_ListSeeder extends Seeder
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

        for ($loop = 0; $loop < 150; $loop++) {

            DB::table("patient__waiting__lists")->insert([
                "user_id"=>$faker->numberBetween(1,10),
                "hospital_id"=>$faker->numberBetween(1,150),
                "patient_id"=>$faker->numberBetween(1,150),	
                "status"=>$faker->randomElement(["Waiting","Active","On Going","Passive"]),	
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),
            ]);
    }
}
}