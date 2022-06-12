<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use App\Models\Prescribe_drug;

class IssueDrug extends Component
{
    
    public function render()
    {
        $prescirbed =Prescribe_drug::where('status','recover')->get();
      
        return view('livewire.hospital.pharmacy.issue-drug')->with('prescirbed', $prescirbed);
    }
}
