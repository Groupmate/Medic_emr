<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'user_id', 'type', 'region', 'zone',
        'woreda', 'kebele', 'city',
    ];

    public function user()
    {
        return $this->hasOne('\App\Models\User::class');
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function referal(){
        return $this->hasMany(Referal::class);
    }
}
