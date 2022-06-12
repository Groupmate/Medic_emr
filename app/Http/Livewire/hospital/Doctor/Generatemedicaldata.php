<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;

class Generatemedicaldata extends Component
{ 
    public $patient;
    public function mount($id)
    {
        $this->patient = Patient::where('id', $id)->first(); 
    } 
     
    public function render()
    {     
        return view('livewire.hospital.doctor.generate-medical-data', [
            'patient' => $this->patient,
        ]);  
    }
}
