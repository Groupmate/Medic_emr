<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;

class Generatemedicaldata extends Component
{ 
    public $patient, $symptom = [], $diagnosis_info = [], $description,
           $numerical_info = [], $picture = [], $disease = [];
    public function mount($id)
    {
        $this->patient = Patient::where('id', $id)->first(); 
    } 
    public function saveRecord()
    {
        dd($this->disease); 
    } 
    public function render()
    {     
        return view('livewire.hospital.doctor.generatemedicaldata', [
            'patient' => $this->patient,
        ]);  
    }
} 