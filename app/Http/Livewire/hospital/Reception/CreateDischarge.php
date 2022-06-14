<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Bedassignment;
use App\Models\Discharge;
use App\Models\Bed;
use App\Models\Patient;

class CreateDischarge extends Component
{       
    public $search='';
    public $ward,$admission_charge,$date_in,$date_out,$status,$patient_id,$bed_id;
    public function create()
    {
    //    $this->validate();
       Discharge ::create($this->modeldata());
       $bed_id=Bedassignment::where('patient_id',$this->patient_id)->first()->bed_id;
       
       $bed = Bed::where('id', $bed_id)->first();
    //    dd($bed);
        $bed->status = "free"; 
        $bed->save();  
              
       session()->flash('message', 'patient discharged  .');
       $this->reset();
    }
    public function modelData()
   {
     
       return [
           'patient_id'=>$this->patient_id,
           'ward'=>$this->ward,
           'admission_charge'=>$this->admission_charge,
           'date_in'=>$this->date_in,
           'status'=>$this->status,
           'date_out'=>$this->date_out,
            ];
   }    
    public function render()
    {
        $patients = Patient::where('firstname','like','%'.$this->search.'%')->get();
        return view('livewire.hospital.reception.create-discharge')->with('patients',$patients);
    }
}