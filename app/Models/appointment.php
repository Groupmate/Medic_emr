<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'patient_id', 'issue_date', 'visit_date', 'descrpition', 'status'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
