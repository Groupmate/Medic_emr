<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class block extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'no_room', 'hospital_id'
  ];
    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
    public function room(){
        return $this->hasMany(Room::class);
    }
    public function bedassignment(){
        return $this->hasMany(Bedassignment::class);
    }
}
