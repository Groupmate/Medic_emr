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

class ReferPatient extends Component
{
    public $organizations;
    // public function readAssignmentTable(){
    //     return Patient_Waiting_List::paginate(5);
    // }

    public function render()
    {
        // $organization =Patient_Waiting_List::latest()->paginate(5);
        $userID  = Auth::user()->toArray();
    
        $assignmentDoctor = Patient_Waiting_List::all()->toArray();
        $assignmentPatient = Patient_Waiting_List::all()->toArray();
        $patientID = Patient::all()->toArray();
        // $organization= Patient_Waiting_List::select('patients.first_name','patients.last_name','appointments.issue_date','appointments.visit_date')->get();
        $organizations = Patient_Waiting_List::leftJoin('users', 'patient__waiting__lists.user_id', '=', 'users.id')
                            ->select('patient__waiting__lists.patient_id')->get()->toArray();
        $opt [] = $organizations;
    // dd($organizations);
        return view('livewire.hospital.doctor.refer-patient', 
        compact('userID', 'assignmentDoctor','assignmentPatient', 'patientID'))->with( 'organizations', $opt);
    }
}
