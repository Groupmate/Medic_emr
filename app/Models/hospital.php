<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;
    public function block(){
        return $this->hasMany(Block::class);
    }
}
