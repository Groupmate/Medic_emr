<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
          'email', 'organization_id', 'firstname', 'lastname', 'phone', 'role',
          'address', 'sex', 'date_of_birth', 'password','profile_pic',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(\App\Models\Role::class, 'role_user');
    // }

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function hospital()
    {
        return $this->hasOne(Hospital::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function referal(){
        return $this->hasMany(Referal::class);
    }
}
