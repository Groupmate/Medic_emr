<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'patient_id', 'test', 'description',
    ];
    
    protected $casts = [
        'test' => 'array',  
    ];
}
