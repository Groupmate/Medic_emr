<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescribe_drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'drug_name', 'patient_id', 'doctor_id','status','quantity','descrpition'
  ];
}
