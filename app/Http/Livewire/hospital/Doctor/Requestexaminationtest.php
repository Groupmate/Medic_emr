<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient_waiting_list; 
use App\Models\labrequest; 
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Requestexaminationtest extends Component
{
    use WithPagination;

    public $patient_id, $user_id, $employee = [], $users = [], $available_doctors, $patients,
    $hospital_id, $status, $description, $test = [];
    public $modelId;
    public $modalFormVisible = false;
 
    public function mount($id)
    { 
       $this->patient_id = $id; 
       $this->user_id = Auth()->user()->id; 
    }

    public function request()
    {
        $this->modelId = $this->patient_id;
  
        $employee = Employee::all();
                    
        foreach($employee as $employee)
        {
            $user = User::where('id', $employee->user_id)->first();
             
            if($user->role == 7){

                    $shifts = $employee->shift;
                
                    foreach($shifts as $shift)
                    {
                        if($shift == date('l'))
                        { 
                            $this->employee[$employee->user_id]['user_id'] = $employee->user_id;   
                            $this->employee[$employee->user_id]['full_name'] = $user->firstname.' '.$user->lastname;
                            $this->employee[$employee->user_id]['department'] = $employee->department;
                        }
                    } 
                }
              
            }
 
        
        $this->modalFormVisible=true;
       
    }

    public function rules()
    {
        return[
            'user_id' => 'required',
        ];
    }

    public function modeldata()
    { 
        return[
            'user_id'=> $this->user_id,
            'status'=> "waiting",
            'description' => "",
            'hospital_id'=> 1,
            'patient_id'=> $this->patient_id,
        ];
    }

    public function labmodeldata()
    { 
        return[
            'user_id'=> $this->user_id,
            'test'=> $this->test,
            'description' => "gjhghj",
            'hospital_id'=> 1,
            'patient_id'=> $this->patient_id,
        ];
    }

    public function create()
    {
        $this->validate();
        $psw = Patient_Waiting_List::create($this->modeldata());
        labrequest::create($this->labmodeldata()); 
        $this->modalFormVisible=false; 

        // $http = new \GuzzleHttp\Client;

        // $response = Http::get('https://sms.hahucloud.com/api/send', [
        //     'key' => '946b92a598b36e4ad6aff1e4550d96d922656da4',
        //     'phone'  => $this->phone,
        //     'message' => 'Your queue no '. $psw->id,
        // ]); 

        // session()->flash('message', 'The patient is assigned succesfully'); 
        $this->reset();
    } 

    public function render()
    {
        return view('livewire.hospital.doctor.requestexaminationtest')->with('employee', $this->employee);
    }
}
