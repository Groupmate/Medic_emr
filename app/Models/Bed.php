<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'room_id', 'status'
  ];
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function bedassignment(){
        return $this->hasMany(Bedassignment::class);
    }
}
