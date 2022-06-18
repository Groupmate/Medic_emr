<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;

class Labrequest extends Component
{
    public $test, $patient_id, $user_id, $description;

    public function request()
    {
        $this->validate();
        
    }

    public function modelData()
    {
        return [
            'patient_id'=>$this->patient_id,
            'user_id'=>$this->user_id,
            'test'=>$this->test,
            'description'=>$this->description, 
        ];
    }

    public function rules()
    {
        return [
            'test'=>required,  
        ];
    }

    public function render()
    {
        return view('livewire.hospital.doctor.labrequest');
    }
}
