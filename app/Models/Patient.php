<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
     protected $fillable = [
        'firstname', 'lastname', 'email','status', 'phone_no', 'age',
        'sex', 'dbirth', 'profile_photo','cityname', 'woreda', 'zone', 'region'
    ];

     public function user(){
         return $this->belongsTo(\App\Models\User::class);
     }
     public function scopeActive($query){

         return $query->where('status' ,1);
        }
}