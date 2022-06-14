<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Medical_data; 

class Viewpatienthistory extends Component
{
    public function mount($id)
    {
        $this->patient_id = $id;   
    } 

    public function render()
    {
        $medicaldata = Medical_data::where('patient_id', $this->patient_id)->get();
        return view('livewire.hospital.doctor.viewpatienthistory',[
            'medicaldata' =>  $medicaldata,
        ]);
    }
}
