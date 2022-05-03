<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Service;


class DoctorShift extends Component
{
    public $dname;
    public $sname;

    
    public function render()
    {
        $dname = Doctor::all();
        return view('livewire.doctor-shift',['dname'=>$dname]);
    }
}
