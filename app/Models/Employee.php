<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','hospital_id', 'department', 'shift'
    ];
    protected $casts = [
        'shift' => 'array'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
