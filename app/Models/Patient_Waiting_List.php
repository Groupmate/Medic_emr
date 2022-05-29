<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_Waiting_List extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id', 'hospital_id', 'user_id', 'status'
    ];
}
