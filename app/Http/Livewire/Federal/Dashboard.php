<?php

namespace App\Http\Livewire\Federal;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\User;
use App\Models\Doctor;


class Dashboard extends Component
{
    public function render()
    {
        $TotalUsers = User::get()->count();
        $TotalPatient = Patient::get()->count();
        $TotalDoctor = Doctor::get()->count();
        $TotalHospital = Hospital::get()->count();

       //dd($TotalHospital);
        return view('livewire.federal.dashboard',compact('TotalUsers', 'TotalPatient', 'TotalDoctor','TotalHospital'));
    }
}
