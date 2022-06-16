<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
class IssueDrug extends Component
{
    public $search='', $prescribed ;
  
    public function ser()
    {
        $patients=Patient::where('firstname','like','%'.$this->search.'%')->first()->id;
        $this->prescribed=Prescribe_drug::where('patient_id',$patients)->first();
    }
     
    public function render()
    {   
        if (!is_null($this->search)) {
            return view('livewire.hospital.pharmacy.issue-drug', ['prescribed' => $this->prescribed]);
        } 
        else{
            return view('livewire.hospital.pharmacy.issue-drug');
        }
    }
}
