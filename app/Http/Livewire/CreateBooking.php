<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Service;
use App\Models\Doctor;
use App\Models\Appointment;

class CreateBooking extends Component
{
    public $doctors;

    public $state = [
        'service' => '',
        'doctor' => '',
        'time' => '',
        'name' => '',
        'email' => ''
    ];

    protected $listeners = [
        'updated-booking-time' => 'setTime'
    ];

    public function mount()
    {
        $this->doctors = collect();
    }

    public function setTime($time)
    {
        $this->state['time'] = $time;
    }

    protected function rules()
    {
        return [
            'state.service' => 'required|exists:services,id',
            'state.doctor' => 'required|exists:doctors,id',
            'state.time' => 'required|numeric',
            'state.name' => 'required|string',
            'state.email' => 'required|email',
        ];
    }

    public function createBooking()
    {
        $this->validate();

        $appointment = Appointment::make([
            'date' => $this->timeObject->toDateString(),
            'start_time' => $this->timeObject->toTimeString(),
            'end_time' => $this->timeObject->clone()->addMinutes(
                $this->selectedService->duration
            )->toTimeString(),
            'client_name' => $this->state['name'],
            'client_email' => $this->state['email'],
        ]);

        $appointment->service()->associate($this->selectedService);
        $appointment->doctor()->associate($this->selectedDoctor);

        $appointment->save();

        return redirect()->to(route('bookings.show', $appointment) . '?token=' . $appointment->token);
    }

    public function updatedStateService($serviceId)
    {
        $this->state['doctor'] = '';

        if (! $serviceId) {
            $this->doctors = collect();
            return;
        }

        $this->clearTime();
        $this->doctors = $this->selectedService->doctors;
    }

    public function updatedStateDoctor()
    {
        $this->clearTime();
    }

    public function clearTime()
    {
        $this->state['time'] = '';
    }

    public function getSelectedServiceProperty()
    {
        if (! $this->state['service']) {
            return null;
        }

        return Service::find($this->state['service']);
    }

    public function getSelectedDoctorProperty()
    {
        if (! $this->state['doctor']) {
            return null;
        }

        return Doctor::find($this->state['doctor']);
    }

    public function getHasDetailsToBookProperty()
    {
        return $this->state['service'] && $this->state['doctor'] && $this->state['time'];
    }

    public function getTimeObjectProperty()
    {
        return Carbon::createFromTimestamp($this->state['time']);
    }

    public function render()
    {
        $services = Service::all();

        return view('livewire.create-booking', [
            'services' => $services
        ])
            ->layout('layouts.guest');
    }
}
