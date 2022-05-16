<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'orgn_id' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'address' => ['string', 'max:255'],
            'sex' => ['string', 'max:255'],
            'date_of_birth' => ['string', 'max:255'],
            'type' => ['string', 'max:255'],
            'department' => ['string', 'max:255'],
            'profile_pic' => [],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'phone' => $input['phone'],
            'orgn_id' => $input['orgn_id'],
            'email' => $input['email'],
            'role' => $input['role'],
            'address' => $input['address'],
            'sex' => $input['sex'],
            'date_of_birth' => $input['date_of_birth'],
            'type' => $input['type'],
            'department' => $input['department'],
            'profile_pic' => $input['profile_pic'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
        ]);
    }

}
