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
    
    public function save()
    {
<<<<<<< Updated upstream
        // dd('one');
        return view('livewire.hospital.doctor.generatemedicaldata');
=======
        dd($patient->id);
    }

    public function render()
    {     
        return view('livewire.hospital.doctor.generatemedicaldata', [
            'patient' => $this->patient,
        ]); 
>>>>>>> Stashed changes
    }
}
