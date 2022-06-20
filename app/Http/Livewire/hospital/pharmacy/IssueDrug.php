<?php

namespace App\Http\Livewire\Hospital\Pharmacy;
 
use Livewire\Component;
use App\Models\Prescribe_drug;
use App\Models\Patient;
use App\Models\Medical_drug;
class IssueDrug extends Component
{
    public $search='',$prescribed ,$patient_id;
  
   public function issue($id)
   {
        
        $prescribe_drug=Prescribe_drug::where('id',$id)->first();
        $quantity=Prescribe_drug::where('id',$id)->first()->quantity;
        $medical_drug=Medical_drug::where('name',$prescribe_drug->drug_name)->first();
         if($medical_drug->quantity >= $quantity )
         {
            $medical_drug->quantity = $medical_drug->quantity - $quantity;
            $medical_drug->save();
            $prescribe_drug->status = "taken";
            $prescribe_drug->save();
         }
         else{
            session()->flash('message', 'There are no such drugs in our store');
         }
      
   }
     
    public function render()
    {   
        if(empty($this->search)){
            $this->prescribed=Prescribe_drug::where('national_id',$this->search)->get();
            return view('livewire.hospital.pharmacy.issue-drug');
        }
        else{
            $this->prescribed=Prescribe_drug::where('national_id','like','%'.$this->search.'%')->where('status','wating')->get();
            foreach($this->prescribed as $patient){
                $patients[$patient->id] = Patient::where('national_id', $patient->national_id)->first()->firstname;
            }
            return view('livewire.hospital.pharmacy.issue-drug')->with('prescribed',$this->prescribed)->with('patient', $patients);
        }
       
    }
}
