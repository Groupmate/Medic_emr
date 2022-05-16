<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];
    use HasFactory;
    // protected $fillable = [
    //     'firstname', 'lastname', 'email','marriage_status', 'phone_no', 'profile_pic',
    //     'sex', 'birth_of_date', 'profile_photo','cityname', 'woreda', 'zone', 'region','kebele','bloode_group'
    // ];
  
    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}
