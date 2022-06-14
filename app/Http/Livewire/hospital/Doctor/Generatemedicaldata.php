<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Medical_data; 
use Illuminate\Support\Facades\Auth;

class Generatemedicaldata extends Component
{ 
    public $patient, $symptom = [], $diagnosis_info = [], $description,
           $numerical_info = [], $picture = [], $disease = [];

    public $hospital_id, $patient_id, $user_id; 
    
    public function mount($id)
    {
        $this->patient_id = $id;  
    } 

    public function saveRecord()
    {
        $this->user_id = Auth()->user()->id;
        Medical_data::create($this->medicalDataModelData()); 
        session()->flash('message', 'The patients data is fully recorded.'); 
        $this->reset();
    } 

    public function medicalDataModelData()
    {
        $this->patient = Patient::where('id', $id)->first(); 
        return [
            'hospital_id'=>1,
            'symptom'=>$this->symptom,
            'diagnosis_info'=>$this->diagnosis_info,
            'numerical_info'=>$this->numerical_info,
            'description'=>$this->description,
            'picture'=>$this->picture,
            'disease'=>$this->disease,
            'patient_id'=>$this->patient_id,
            'user_id'=>$this->user_id, 
        ];
    }

    public function render()
    {     
        $medicaldata = Medical_data::where('patient_id', $this->patient_id)->get();
        //dd($medicaldata->count());
        return view('livewire.hospital.doctor.generatemedicaldata', [
            'patient' => $this->patient,
            'medicaldata' => $medicaldata,
        ]);  
    }
} 