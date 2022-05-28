<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\Doctor;

class HrStatics extends Component
{
    public function render(){
       

        $opd = Doctor::where('department','IPD')->get();
        $ipd = Doctor::where('department','OPD')->get();
        $emergency= Doctor::where('department','Emergency')->get();
        $rad = Doctor::where('speciality','Radiology')->get();
        $gdoc = Doctor::where('speciality','General Doctor')->get();
        $eye = Doctor::where('speciality','Eye')->get();
        $mind = Doctor::where('speciality','Mind')->get();
        $skel = Doctor::where('speciality','Skeleton')->get();
        $nerve = Doctor::where('speciality','Nerve')->get();
        $opd_count=count($opd);
        $ipd_count=count($ipd);
        $emergency_count=count($emergency);  
        $rad_count=count($rad);
        $gdoc_count=count($gdoc);
        $eye_count=count($eye);
        $mind_count=count($mind);
        $skel_count=count($skel);
        $nerve_count=count($nerve);


       return view("livewire.statics.hr-statics",compact('opd_count','ipd_count',
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

    // public function render()
    // {
    //     return view('livewire.statics.hr-statics');
    // }
}
