<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Patient_Waiting_List;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Auth;

class OngoingPatients extends Component
{
    public $patient= [];

    public function read(){
        $id = Auth()->user()->id;  
       
        $patient_waiting = Patient_Waiting_List::select('patient_id')->where('status','ongoing')
                           ->where('user_id', $id)->get();
        
        foreach($patient_waiting as $pw){        
            $this->patient[] = Patient::find($pw->patient_id); 
        }  
    }

    public function rexamine($id)
    { 
        $patient_waiting = Patient_Waiting_List::where('patient_id', $id)->where('status', 'ongoing')->first();
        $patient_waiting->status = "ongoing";
        $patient_waiting->save(); 
         
        return redirect()->route('generatemedicaldata', $id);
    }


    public function render()
    {
        $this->read();
        return view('livewire.hospital.doctor.ongoing-patients', ['patients' => $this->patient]);
    }
}
