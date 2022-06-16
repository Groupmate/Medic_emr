<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Patient_Waiting_List;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Referal;
use Illuminate\Support\Facades\Auth;

use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ReferPatient extends Component
{
    use WithPagination;
    public $modelFormVisible, $modelConfirmDeleteVisible, $modelUpdateVisible;
    public $patient_id, $date, $diagnosis, $refered_by, $refered_to;
    public $modelId;
  
    public function mount($id)
    { 
       $this->patient_id = $id; 
    }

    public function modelData()
    {
        return [
            'patient_id'=>$this->patient_id,
            'date'=>$this->date,
            'diagnosis'=>$this->diagnosis,
            'refered_by'=>Auth::user()->id,
            'refered_to'=>$this->refered_to,
            'status'=>"waiting",
        ];
    }

    public function rules()
    {
        return [ 
            'date'=>'required',
            'diagnosis'=>'required', 
            'refered_to'=>'required',
        ];
    }

    public function refer()
    {
        $this->validate();
        $pw = Referal::where('patient_id', $this->patient_id)->where('status', 'waiting')->get();
        if($pw)
        { 
            $this->modalFormVisible=false;
            session()->flash('message', 'The Patient is already refered!'); 
        }
        else
        {
            $this->validate();
         
            $refer = Referal::create($this->modelData());
            session()->flash('message', 'Successfully Refered the Patient!'); 
            $this->modelFormVisible = false;
            $this->reset();
            } 
             
    }

    public function render()
    {
        $hospitals = Hospital::all();
        
        $userID  =DB::select('select * from users where id = ?', [Auth::user()->id]); 
        // dd($userID);
     
        return view('livewire.hospital.doctor.refer-patient', 
        ['userID'=>$userID, 'hospitals'=>$hospitals]);
    }
}
