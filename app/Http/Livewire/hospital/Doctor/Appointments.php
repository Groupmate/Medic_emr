<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class Appointments extends Component
{ use WithPagination;

    public $doctor_id, $patient_id, $issue_date, $visit_date, $description, $status,$user_id; 
    public $modelFormVisible=false;
    public $modalConfirmDeleteVisible=false;
    public $modelId;
    public function create()
    {
        $this->validate();
        
        
        Appointment::create($this->modeldata());
        session()->flash('message', 'Appointment created Successfully.');
        $this->reset();
    }
   
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
        $doctor=Doctor::where('user_id',$this->user_id)->first();
        $this->doctor_id= $doctor->id;
        //  dd($this->doctor_id);
       
        return [
            'doctor_id'=>$this->doctor_id,
            'patient_id'=>$this->patient_id,
            'issue_date'=>$this->issue_date,
            'visit_date'=>$this->visit_date,
            'status'=>$this->status,
            'descrpition'=>$this->description,
          
             ];
    }    
    /**
     * rules validate
     *
     * @return void
     */
    public function rules()
    {
        return [
           
            'patient_id'=>'required',
            'issue_date'=>'required',
            'visit_date'=>'required',
            'status'=>'required',
            'description'=>'required',
           
            
        ];
    }     
    public function deleteShowModel($id)
    {
        $this->modelId=$id;
        $this->modalConfirmDeleteVisible=true;
    }


    public function updateShowModal($id)
    {
        $this->modelId = $id;
        $this->modelFormVisible=true;
          $this->loadModel();
    }
    public function delete()
    {
   Appointment::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }    
    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
       Appointment::find($this->modelId)->update($this->modelData());
       session()->flash('message', 'Appointment Updated Successfully.');
        $this->modelFormVisible= false;
        // $this->resetvars();
    } 
    public function loadModel()
    {
        $appointment=Appointment::find($this->modelId);
            $this->doctor_id= $appointment->doctor_id;
            $this->patient_id= $appointment->patient_id;
            $this->issue_date= $appointment->issue_date;
            $this->visit_date= $appointment->visit_date;
            $this->status= $appointment->status;
            $this->description= $appointment->descrpition;
           
           
           
           

    }   
    public function render()
    {
        $dname = Doctor::all();
       $pname = Patient::all();
       $appointment =Appointment::all();
        return view('livewire.hospital.doctor.appointments',['appointment'=>Appointment::paginate(3)])->with('dname',$dname)->with('pname',$pname);
     
    }
}