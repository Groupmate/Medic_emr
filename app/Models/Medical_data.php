<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'hospital_id', 'patient_id', 'medical_drug_id',
        'symptom', 'diagnosis_info', 'numerical_info', 'description',
        'picture', 'disease'
    ];
    protected $casts = [
        'symptom' => 'array',  'diagnosis_info' => 'array',
        'numerical_info' => 'array',
        'description' => 'array',  'picture' => 'array', 
         'disease' => 'array',
    ];
}
