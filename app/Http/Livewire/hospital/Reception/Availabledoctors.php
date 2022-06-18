<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient_waiting_list; 

class Availabledoctors extends Component
{
    public $users = [], $doctors = [], $pwl;

    public function read()
    {
        $user_id = Auth()->user()->id;
 
        $hospital = Employee::where('user_id', $user_id)->first()->hospital_id;
 
        $doctor = Doctor::all();
        foreach($doctor as $doctor)
        {
            $shift = $doctor->shift;
            
            foreach($shift as $shift)
            {
                if($shift == date('l'))
                {
                    $this->doctors[] = Doctor::where('id', $doctor->id)->first()->user_id;
                }
            }
        }
        foreach($this->doctors as $doctor)
        {
            $this->users[] = User::where('id', $doctor)->first();
        } 
    }
 
    public function render()
    {
        $this->read();

        return view('livewire.hospital.reception.availabledoctors',[
            $this->doctors, $this->users
        ]);
    }
    
}
