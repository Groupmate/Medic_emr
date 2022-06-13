<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
class IssueDrug extends Component
{
    public $search='', $prescribed ;

    public function mount()
    {
        if (!is_null($this->search)) 
        {
            $this->ser(); 
            
        }  else{
            $this->prescribed = '';
        }
    }

    public function ser()
    {
        $patients=Patient::where('firstname','like','%'.$this->search.'%')->first()->id;
         return $this->prescribed=Prescribe_drug::where('patient_id',$patients)->first();
    }
     
    public function render()
    {   
        return view('livewire.hospital.pharmacy.issue-drug');
    }
}
