<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Prescribe_drug;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Medical_drug;
class PrescribeMedicaldrug extends Component
{
    public $message;
    public $patient_id,$user_id,$status,$descrpition,$quantity,$drug_name,$national_id,$prescribe;
    public $modelFormVisible=false;
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modelFormVisible=true;
    }

    public function mount($id)
    {
        $this->prescribe= Prescribe_drug::where('status','pending')->where('patient_id', $this->patient_id)->get();
        $this->patient_id = $id; 
        $this->national_id=Patient::where('id',$this->patient_id)->first()->national_id;
        
    }
    protected $listeners = [
        'refresh-me'=>'$refresh'
    ];
   
    public function create()
    {
        
         $this->validate();
        Prescribe_drug::create($this->modeldata());
        session()->flash('message', 'prescribed Successfully.');
        $this->emitself('refresh-me');
        $this->reset(); 

    }
    public function rules()
    {
        return [
           
           
            'descrpition'=>'required',
            'quantity'=>'required|integer|min:0',
            'drug_name'=>'required',
            'national_id'=>'required',
            'patient_id'=>'required',
         
          
        ];
    }  
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
    
       
        return [
            'user_id'=>$this->user_id,
            'patient_id'=>$this->patient_id,
            'national_id'=>$this->national_id,
            'status'=>'pending',
            'descrpition'=>$this->descrpition,
            'drug_name' =>$this->drug_name,
            'quantity'=>$this->quantity,
             ];
            
             $this->reset(); 
    }   
    public function complete(){
  
        $prescribe=Prescribe_drug::where('status','pending')->where('patient_id', $this->patient_id)->get();
    //   dd($prescribe);
      foreach($prescribe as $prescribe){
        $prescribe->status="wating";
        $prescribe->save(); 
      }
      
       
    } 
    public function render()
    {   $medical_drug=Medical_drug::all();
        $this->prescribe= Prescribe_drug::where('status','pending')->where('patient_id', $this->patient_id)->get();
        return view('livewire.hospital.doctor.prescribe-medicaldrug')->with('prescribe',$this->prescribe)->with('medical_drug',$medical_drug);
    }
}
