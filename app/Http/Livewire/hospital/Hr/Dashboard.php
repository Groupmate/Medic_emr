<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $opd_count = Doctor::where('department','IPD')->get()->count();
        $ipd_count = Doctor::where('department','OPD')->get()->count();
        $emergency_count= Doctor::where('department','Emergency')->get()->count();
        $total = Doctor::get()->count();
        $rad_count = Doctor::where('speciality','Radiology')->get()->count();
        $gdoc_count = Doctor::where('speciality','General Doctor')->get()->count();
        $eye_count = Doctor::where('speciality','Eye')->get()->count();
        $mind_count = Doctor::where('speciality','Mind')->get()->count();
        $skel_count = Doctor::where('speciality','Skeleton')->get()->count();
        $nerve_count = Doctor::where('speciality','Nerve')->get()->count();
       
        $user_id = Auth()->user()->id;
        $hospital_name = Hospital::where('user_id', $user_id)->first()->name;


       return view("livewire.hospital.hr.dashboard",compact('opd_count','ipd_count','total','hospital_name',
       'emergency_count','rad_count','gdoc_count','eye_count','mind_count','skel_count','nerve_count'), [
         
        "terms" => json_encode(array(
                   "IPD",
                   "OPD",
                   "Emergency",
                   "Radiology",
                  "General Doctor",
                  "Eye",
                  "Mind",
                  "Skeleton",
                  "Nerve"
                   )),
                ]);
    }

}
