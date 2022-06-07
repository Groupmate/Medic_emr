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
        $patient_waiting = Patient_Waiting_List::find($id);
        $patient_waiting->status = "examined";
        $this->emit('generatemedicaldata', ['patient_id' => $id]);
    }

    public function render()
    { 
        $this->read();
        foreach($this->patient as $patient){
            $patients[] = $patient; 
        }
        return view('livewire.hospital.doctor.assignedpatients', compact('patients'));
    }
}