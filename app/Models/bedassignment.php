<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bedassignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id', 'room_id', 'block_id','bed_id','allotment_time',
  ];
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function bed(){
        return $this->belongsTo(Bed::class);
    }
    public function block(){
        return $this->belongsTo(Block::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}