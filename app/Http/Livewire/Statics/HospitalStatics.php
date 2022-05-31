<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Medical_data;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient_Waiting_List;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HospitalStatics extends Component
{
    public function render()
    {
        $TotalUsers = User::get();
        
        $TotalPatient = Patient::get();
        
        $TotalDoctor = Doctor::get();
        $INP =Doctor::where('department','IPD')->get();
        $OP = Doctor::where('department','OPD')->get();
        $EMP = Doctor::where('department','Emergency')->get();

        // $user_id = Auth()->user()->id;
        // $hospital = Hospital::where('user_id', $user_id)->first();
        // dd($hospital);
    
        return view('livewire.statics.hospital-statics' );
    }
}
