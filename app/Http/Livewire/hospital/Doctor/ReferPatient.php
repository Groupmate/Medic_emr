<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Patient_Waiting_List;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ReferPatient extends Component
{
    public function render()
    {
        // $organization =Patient_Waiting_List::latest()->paginate(5);
        $userID  =DB::select('select * from users where id = ?', [Auth::user()->id]); 
        // dd($userID);
    
        $assignmentDoctor = DB::select('select * from patient__waiting__lists');
        // dd($assignmentDoctor);
        $patientID = DB::select('select * from patients');
        // dd($patientID);
        return view('livewire.hospital.doctor.refer-patient', 
        ['userID'=>$userID, 'assignmentDoctor'=>$assignmentDoctor, 'patientID'=>$patientID]);
    }
}
