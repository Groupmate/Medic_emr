<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function appointment(){
        return $this->hasMany(Appointmen::class);
    }
    public function bedassignment(){
        return $this->hasMany(Bedassignment::class);
    }
}
