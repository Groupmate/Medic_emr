<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Medical_drug;
use App\Models\Employee;
class Dashboard extends Component
{   public $user_id,$hospital_id;
    
    public function render()
    {  
        $this->user_id = Auth()->user()->id;
        $this->hospital_id = Employee::where('user_id', $this->user_id)->first()->hospital_id; 
      
        $medical_drug=Medical_drug::where('hospital_id',$this->hospital_id)->get();
        return view('livewire.hospital.pharmacy.dashboard')->with('medical_drug',$medical_drug);
    }
}
