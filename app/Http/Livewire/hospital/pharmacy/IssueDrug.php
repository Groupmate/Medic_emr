<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
class IssueDrug extends Component
{
    public $type,$patients,$prescirbed;
    
    public function search()
    {  
        $this->patients = Patient::where('firstname',$this->type)->first()->id;
        // dd($patients);
        $this->prescirbed =Prescribe_drug::where('patient_id',$this->patients)->first()->id;
        dd( $this->prescirbed);
    }
    public function render()
    {
       
       
        return view('livewire.hospital.pharmacy.issue-drug',[ $this->prescirbed]);
    }
}
