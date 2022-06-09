<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Discharge extends Model 
{
    protected $fillable = [
        'patient_id', 'date_in', 'date_out', 'ward','admission_charge','status'
    ];
    use HasFactory;
}
