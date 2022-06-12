<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Prescribe_drug;
use App\Models\Doctor;
class PrescribeMedicaldrug extends Component
{
    public $alldrugs = [
        []
    ];
    public $patient_id=1,$user_id,$status,$descrpition,$quantity=[],$drug_name=[];

    public function mount()
    {
     
        $this->alldrugs = [
            ['drug_name' => '', 'quantity' => 1]
        ];
    }

    public function addDrug()
    {
        $this->alldrugs[] = ['drug_name' => '', 'quantity' => 1];
    }
    public function removeDrug($index)
    {
        unset($this->alldrugs[$index]);
        $this->alldrugs = array_values($this->alldrugs);
    }
    public function create()
    {
        
        // $this->validate();
        
         //dd($this->alldrugs);
       Prescribe_drug::create($this->modeldata());
        session()->flash('message', 'patient  Successfully.');
      
        $this->reset();
    }
   
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
      
        foreach ($this->alldrugs as $index => $alldrug) {
         $this->drug_name[] = $alldrug['drug_name'];
          $this->quantity[] = $alldrug['quantity'];
        }

        return [
            'user_id'=>$this->user_id,
            'patient_id'=>$this->patient_id,
            'status'=>$this->status,
            'descrpition'=>$this->descrpition,
            'drug_name' =>$this->drug_name,
            'quantity'=>$this->quantity,
             ];
    }    
    public function render()
    {
        info($this->alldrugs);
        return view('livewire.hospital.doctor.prescribe-medicaldrug');
    }
}
