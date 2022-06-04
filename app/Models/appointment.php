<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id', 'patient_id', 'issue_date', 'visit_date', 'description', 'status'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
