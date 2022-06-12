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
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ReferPatient extends Component
{
    use WithPagination;
    public $modelFormVisible, $modelConfirmDeleteVisible, $modelUpdateVisible;
    public $patient_id, $date, $diagnosis, $refered_by, $refered_to;
    public $modelId;

    public function referShowModal($patient_id, $refered_by){
        // $this-resetValidation();
        // $this-reset();
        $this->modelFormVisible = true;
        $this->patient_id = $patient_id;
        $this->refered_by = $refered_by;
    }

    public function modelData()
    {
        return [
            'patient_id'=>$this->patient_id,
            'date'=>$this->date,
            'diagnosis'=>$this->diagnosis,
            'refered_by'=>$this->refered_by,
            'refered_to'=>$this->refered_to,
        ];
    }

    public function rules()
    {
        return [
            'patient_id'=>'required',
            'date'=>'required',
            'diagnosis'=>'required',
            'refered_by'=>'required',
            'refered_to'=>'required',
        ];
    }

    public function refer(){
        $this->validate();
        $refer = Referal::create($this->modelData());
        $this->modelFormVisible = false;
        $this->reset();
    }

    public function render()
    {
        $hospitals = DB::select('select * from hospitals');
        // dd($hospitals);
        $userID  =DB::select('select * from users where id = ?', [Auth::user()->id]); 
        // dd($userID);
    
        $assignmentDoctor = DB::select('select * from patient__waiting__lists');
        // dd($assignmentDoctor);
        $patientID = DB::select('select * from patients');
        // dd($patientID);
        return view('livewire.hospital.doctor.refer-patient', 
        ['userID'=>$userID, 'hospitals'=>$hospitals, 'assignmentDoctor'=>$assignmentDoctor, 'patientID'=>$patientID]);
    }
}
