<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
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

        for ($loop = 0; $loop < 15; $loop++) {

            DB::table("doctors")->insert([
                "user_id"=>$faker->numberBetween(0,5),
                "hospital_id"=>$faker->numberBetween(0,2),
                "speciality"=>$faker->randomElement(["Radiology","General Doctor","Eye","Mind","Skeleton","Nerve"]),
                "department"=>$faker->randomElement(["OPD","IPD","Emergency"]),
                "shift"=>$faker->randomElement(["Shift1", "Shift2", "Shift3", "Shift4", "All_Shift"]),
                "created_at"=>$faker->date(),
                "updated_at"=>$faker->date(),
            ]);
    }
}
}