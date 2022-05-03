<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Schedule;
use App\Models\Doctor;

class BookingController extends Controller
{
    public function index()
    {
        $schedule = Schedule::find(1);
        $service = Service::find(1);

        $doctor = Doctor::find(1);

        $slots = $doctor->availableTimeSlots($schedule, $service);

        return view('bookings.create', compact('slots'));
    }
}
