<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Prescribe_drug;
use App\Models\Doctor;
use App\Models\Patient;
class PrescribeMedicaldrug extends Component
{
    
    public $patient_id,$user_id,$status,$descrpition,$quantity,$drug_name,$national_id,$prescribe;

    public function mount($id)
    {
        $this->patient_id = $id;  
    }
    
   
    public function create()
    {
        
         $this->validate();
        
         //dd($this->alldrugs);
        Prescribe_drug::create($this->modeldata());
        session()->flash('message', 'prescribed Successfully.');
        $this->prescribe= Prescribe_drug::where('status','pennding')->where('patient_id', $this->patient_id)->get();
        $this->reset(); 
    }
    public function rules()
    {
        return [
           
           
            'descrpition'=>'required',
            'quantity'=>'required',
            'drug_name'=>'required',
         
          
        ];
    }  
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
        $this->national_id=Patient::where('id',$this->patient_id)->first()->national_id;
       
        return [
            'user_id'=>$this->user_id,
            'patient_id'=>$this->patient_id,
            'national_id'=>$this->national_id,
            'status'=>'pennding',
            'descrpition'=>$this->descrpition,
            'drug_name' =>$this->drug_name,
            'quantity'=>$this->quantity,
             ];
    }   
    public function complete(){
  
        $prescribe=Prescribe_drug::where('status','pennding')->where('patient_id', $this->patient_id)->first();
      dd($prescribe);
        $prescribe->status="wating";
    } 
    public function render()
    {
        $this->prescribe= Prescribe_drug::where('status','pennding')->where('patient_id', $this->patient_id)->get();
        return view('livewire.hospital.doctor.prescribe-medicaldrug')->with('prescribe',$this->prescribe);
    }
}
