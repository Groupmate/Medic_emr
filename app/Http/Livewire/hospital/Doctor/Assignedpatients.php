<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Patient_Waiting_List;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Auth;

class Assignedpatients extends Component
{
    public $patient= [];
    public function read()
    {
        $id = Auth()->user()->id;  
       
        $patient_waiting = Patient_Waiting_List::select('patient_id')->where('status','Waiting')
                           ->where('user_id', $id)->get();
        
        foreach($patient_waiting as $pw){        
            $this->patient[] = Patient::find($pw->patient_id); 
        }  
    }

    public function examine($id)
    { 
        $patient_waiting = Patient_Waiting_List::where('patient_id', $id)->first();
        $patient_waiting->status = "examined";
        //dd($patient_waiting->status);
        $pid = $patient_waiting->patient_id;
         
        return redirect()->route('generatemedicaldata', $pid);
    }

    public function render()
    { 
        $this->read(); 
        return view('livewire.hospital.doctor.assignedpatients',[
            'patients' => $this->patient,
        ]);
    }
}