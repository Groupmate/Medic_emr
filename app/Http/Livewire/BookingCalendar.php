<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Carbon\CarbonInterval;

class BookingCalendar extends Component
{
    public $date;

    public $calendarStartDate;

    public $doctor;

    public $service;

    public $time;

    public function mount()
    {
        $this->calendarStartDate = now();
        $this->setDate(now()->timestamp);
    }

    public function updatedTime($time)
    {
        $this->emitUp('updated-booking-time', $time);
    }

    public function setDate($timestamp)
    {
        $this->date = $timestamp;
    }

    public function getDoctorScheduleProperty()
    {
        return $this->doctor->schedules()
            ->whereDate('date', $this->calendarSelectedDateObject)
            ->first();
    }

    public function getAvailableTimeSlotsProperty()
    {
        if (! $this->doctor || ! $this->doctorSchedule) {
            return collect();
        }

        return $this->doctor->availableTimeSlots($this->doctorSchedule, $this->service);
    }

    public function getCalendarSelectedDateObjectProperty()
    {
        return Carbon::createFromTimestamp($this->date);
    }

    public function getCalendarWeekIntervalProperty()
    {
        return CarbonInterval::days(1)
            ->toPeriod(
                $this->calendarStartDate,
                $this->calendarStartDate->clone()->addWeek()
            );
    }

    public function incrementCalendarWeek()
    {
        $this->calendarStartDate->addWeek()->addDay();
    }

    public function decrementCalendarWeek()
    {
        $this->calendarStartDate->subWeek()->subDay();
    }

    public function getWeekIsGreaterThanCurrentProperty()
    {
        return $this->calendarStartDate->gt(now());
    }

    public function render()
    {
        return view('livewire.booking-calendar');
    }
}
