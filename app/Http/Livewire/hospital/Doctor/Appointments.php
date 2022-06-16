<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Appointments extends Component
{ 
    use WithPagination;

    public  $patient_id, $issue_date, $visit_date,$descrpition, $phone, $status,$user_id; 
    public $modelFormVisible=false;
    public $modalConfirmDeleteVisible=false;
    public $modelId;
    public function mount($id)
    { 
       $this->patient_id = $id;
    }
    
    public function create()
    {
        $this->validate();
        $pw = Appointment::where('patient_id', $this->modelId)->where('status', 'waiting')->get();
        if($pw)
        {
            session()->flash('message', 'The patient is appointed already'); 
            $this->modalFormVisible=false;
        }
        else{
            $this->validate();
         
            $appointment = Appointment::create($this->modeldata());
            $http = new \GuzzleHttp\Client;
            
            $this->phone = Patient::select('phone_no')->where('id', $this->patient_id)->first();
            $response = Http::get('https://sms.hahucloud.com/api/send', [
                'key' => '946b92a598b36e4ad6aff1e4550d96d922656da4',
                'phone'  => $this->phone,
                'message' => 'Your appointment is on'. $this->visit_date,
            ]); 
            session()->flash('message', 'Appointment created Successfully.');
            $this->reset();
        }
        
    }
   
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
         
        return [
            'user_id'=>$this->user_id,
            'patient_id'=>$this->patient_id,
            'issue_date'=>$this->issue_date,
            'visit_date'=>$this->visit_date,
            'status'=>$this->status,
            'descrpition'=>$this->descrpition,
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
            'visit_date'=>'required|after:'.date('Y-m-d'),
            'status'=>'required', 
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
            $this->user_id= $appointment->user_id;
            $this->patient_id= $appointment->patient_id;
            $this->issue_date= $appointment->issue_date;
            $this->visit_date= $appointment->visit_date;
            $this->status= $appointment->status;
            $this->descrpition= $appointment->descrpition;
            
    }   
    public function render()
    {
        $dname = Doctor::all();
        $pname = Patient::all();
        $appointment =Appointment::all();
        return view('livewire.hospital.doctor.appointments',['appointment'=>Appointment::paginate(3)])->with('dname',$dname)->with('pname',$pname);
     
    }
}
