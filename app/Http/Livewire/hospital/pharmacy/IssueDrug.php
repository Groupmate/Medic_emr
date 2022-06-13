<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
class IssueDrug extends Component
{
    public $search='',$patients;
    
    public function search()
    {
        $patients = Patient::where('firstname',$search)->first()->id;
        dd($this->patients);
    }
    public function render()
    {
        $prescirbed =Prescribe_drug::where('patient_id',$this->patients)->first();
        // dd($this->patients);
        return view('livewire.hospital.pharmacy.issue-drug')->with('prescirbed', $prescirbed);
    }
}
