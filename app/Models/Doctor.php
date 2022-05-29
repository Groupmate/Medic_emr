<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'speciality', 'department', 'shift'
    ];
    protected $casts = [
        'shift' => 'array'
    ];

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }
    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
