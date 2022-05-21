<?php

namespace App\Models;

use Carbon\Carbon;
use App\Bookings\TimeSlotGenerator;
use Illuminate\Database\Eloquent\Model;
use App\Bookings\Filters\AppointmentFilter;
use App\Bookings\Filters\UnavailabilityFilter;
use App\Bookings\Filters\SlotsPassedTodayFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'user_id', 'speciality', 'department', 'shift'
    ];
    protected $casts = [
        'shift' => 'array'
    ];

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }  
    /**
     * appointment doctor appointment by natywelka
     *
     * @return void
     */
    public function appointment(){
        return $this->hasMany(Appointmen::class);
    }
}
