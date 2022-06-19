<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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
       $this->validate();
       Discharge ::create($this->modeldata());
       $bed_id=Bedassignment::where('patient_id',$this->patient_id)->first()->bed_id;
       
       $bed = Bed::where('id', $bed_id)->first();
    //    dd($bed);
        $bed->status = "free"; 
        $bed->save(); 
        $bedAssign = DB::delete('delete from bedassignments where patient_id = ?', [$this->patient_id]); 
              
       session()->flash('message', 'patient succesfully discharged  .');
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
   
    public function rules()
    {
        return [
            'patient_id'=>'required',
            'ward'=>'required',
            'admission_charge'=>'required',
            'date_in'=>'required',
            'status'=>'required',
            'date_out'=>'required'
        ];
    }
    public function render()
    {
        $bedpatientID =  DB::select('select * from bedassignments');
        $patientID = DB::select('select * from patients');
        $doctors = DB::select('select * from doctors where user_id = ?', [Auth::user()->id]);
        // dd($doctors);
        $blocks = DB::select('select * from blocks');
        return view('livewire.hospital.doctor.create-discharge', ['bedpatientID'=>$bedpatientID, 'patientID'=>$patientID, 'doctors'=>$doctors, 'blocks'=>$blocks]);
    }
}
