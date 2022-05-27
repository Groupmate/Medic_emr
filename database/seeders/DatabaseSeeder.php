<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 25; $loop++) {
            DB::table("users")->insert([
               
                'orgn_id'=>$faker->numberBetween(1,25),
                'first_name'=>$faker->name(),
                'last_name'=>$faker->name(),
                'phone'=>$faker->numberBetween(251900000000,251999999999),
                'email'=>$faker->email(),
                'role'=>$faker->randomElement(["admin","regionaladmin","zonaladmin","hradmin"] ),
                'password'=>encrypt('password'),
                'address'=>$faker->name(),
                'sex'=>$faker->randomElement(["Male","Female"]),
                'date_of_birth'=>$faker->name(),
                'type'=>$faker->name(),
                'department'=>$faker->randomElement(["OPD","IPD","Emergency"]),
                'profile_pic'=>$faker->name(),
                'created_at'=>$faker->dateTimeBetween("-6 month "," +1 month" ),
                'updated_at'=>$faker->name(),

               
            ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
