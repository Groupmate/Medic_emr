<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescribe_drug extends Model
{
    use HasFactory;
    protected $fillable = [
         'patient_id', 'user_id','status','quantity','descrpition', 'drug_name','national_id', 'quantity'
  ];
 
}
