<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Bedassignment;
use App\Models\Discharge;
use App\Models\Bed;

class CreateDischarge extends Component
{
    public $ward,$admission_charge,$date_in,$date_out,$status,$patient_id=1,$bed_id;
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
        $date = Bedassignment::all();
        return view('livewire.hospital.doctor.create-discharge',compact('date',$date));
    }
}