<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referal extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id', 'date', 'diagnosis', 'refered_by', 'refered_to'
    ];

    public function patientWaitingList(){
        return $this->belongsTo(Patient_Waiting_List::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
