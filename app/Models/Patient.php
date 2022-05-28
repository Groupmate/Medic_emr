<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
     protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'email', 'national_id', 'phone_no', 'age',
        'sex', 'date_of_birth', 'profile_picture', 'kebele', 'woreda', 'city', 'zone', 'region'
    ];

     public function user(){
         return $this->belongsTo(\App\Models\User::class);
     }
     public function scopeActive($query){

         return $query->where('status' ,1);
        }
} 