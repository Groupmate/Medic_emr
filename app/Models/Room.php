<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'department', 'totalcap', 'block_id','cost','room_no','type'
  ];
    public function block(){
        return $this->belongsTo(Block::class);
    }
    public function bed(){
        return $this->hasMany(Bed::class);
    }
    public function bedassignment(){
        return $this->hasMany(Bedassignment::class);
    }
}
