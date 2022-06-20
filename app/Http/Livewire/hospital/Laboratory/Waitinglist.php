<?php

namespace App\Http\Livewire\Hospital\Laboratory;

use Livewire\Component;

class Waitinglist extends Component
{
    public $patient= [], $todayAppointment;
    public function read()
    {
        $id = Auth()->user()->id;  
       
        $patient_waiting = Patient_Waiting_List::select('patient_id')->where('status','Waiting')
                           ->where('user_id', $id)->get();
        
        foreach($patient_waiting as $pw){        
            $this->patient[] = Patient::find($pw->patient_id); 
        }    
    }

    public function render()
    {
        return view('livewire.hospital.laboratory.waitinglist')->with('patients', $this->patients);
    }
}
