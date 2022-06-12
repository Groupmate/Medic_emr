<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Doctor;
class PrescribeMedicaldrug extends Component
{
    public $alldrugs = [
        []
    ];
    public $patient_id=1,$doctor_id=1,$status,$descrpition;

    public function mount()
    {
     
        $this->alldrugs = [
            ['drug_name' => '', 'quantity' => 1]
        ];
    }

    public function addProduct()
    {
        $this->alldrugs[] = ['drug_name' => '', 'quantity' => 1];
    }
    public function create()
    {
        
        // $this->validate();
        
        dd($this->alldrugs);
       Prescribe_drug::create($this->modeldata());
        session()->flash('message', 'Appointment created Successfully.');
      
        $this->reset();
    }
   
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
        $this->doctor_id=  $this->user_id;
        //   dd($this->doctor_id);
        return [
            'doctor_id'=>$this->doctor_id,
            'patient_id'=>$this->patient_id,
            'status'=>$this->status,
            'descrpition'=>$this->descrpition,
            //  'drug_name'=>$this->alldrugs['drug_name'],
            // 'quantity'=>$this->alldrugs['quantity'],
             ];
    }    
    public function render()
    {
        info($this->alldrugs);
        return view('livewire.hospital.doctor.prescribe-medicaldrug');
    }
}
