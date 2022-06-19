<?php

namespace App\Http\Livewire\Hospital\Pharmacy;
 
use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
class IssueDrug extends Component
{
    public $search='',$prescribed ,$patient_id;
  
  
     
    public function render()
    {   
        if(empty($this->search)){
            $this->prescribed=Prescribe_drug::where('national_id',$this->search)->get();
            return view('livewire.hospital.pharmacy.issue-drug');
        }
        else{
          $this->prescribed=Prescribe_drug::where('national_id','like','%'.$this->search.'%')->where('status','wating')->get();
          return view('livewire.hospital.pharmacy.issue-drug')->with('prescribed',$this->prescribed);
        }
       
    }
}
