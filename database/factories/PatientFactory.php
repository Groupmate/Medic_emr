<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   => User::factory(),
            'firstname' => $this->faker->word, 
            'lastname'  => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail(),
            'status'    => $this->faker->boolean(),
            'phone_no'  => $this->faker->numerify('###'),
            'age'     => $this->faker->randomDigit,
            'sex'     => $this->faker->randomElement(['male', 'female']),
            'dbirth'  => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'profile_photo'=> $this->faker->imageUrl($width = 200, $height = 200),
            'cityname' => $this->faker->word, 
            'woreda'  => $this->faker->word, 
            'zone' => $this->faker->word, 
            'region' => $this->faker->word,  
        ];
    }
}
