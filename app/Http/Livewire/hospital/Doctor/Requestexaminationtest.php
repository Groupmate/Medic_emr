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
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Requestexaminationtest extends Component
{
    use WithPagination;

    public $patient_id, $user_id, $employee = [], $users = [], $available_doctors, $patients,
    $hospital_id, $status, $description;
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
        $employeeInfo = Employee::leftJoin('users' , 'employees.user_id' ,'=','users.id')
                      ->select('users.role', 'employees.shift', 'employees.id')
                      ->where('hospital_id', $this->hospital_id)
                      ->get();
        $user = User::where('id', $user_id)->get();
        $employee = Employee::all();
                     
        foreach($employee as $employee)
        {
            $user = User::where('id', $employee->user_id)->get();
            dd($employee->role);
            if($employee->role == 7){

                $shift = $employee->shift;
             
                foreach($shift as $shift)
                {
                    if($shift == date('l'))
                    {
                        $this->employee[] = Employee::where('id', $employee->id)->pluck('user_id')->toArray();
                    }
                } 
            }
        }
        foreach($this->employee as $employee)
        {
            $this->users[] = User::where('id', $employee)->first();
        }
        dd($this->users);
     
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
            'description' => $this->description,
            'hospital_id'=> $this->hospital_id,
            'patient_id'=> $this->patient_id,
        ];
    }

    public function create()
    {
        $this->validate();
        $psw = Patient_Waiting_List::create($this->modeldata()); 
        $this->modalFormVisible=false; 

        $http = new \GuzzleHttp\Client;

        $response = Http::get('https://sms.hahucloud.com/api/send', [
            'key' => '946b92a598b36e4ad6aff1e4550d96d922656da4',
            'phone'  => $this->phone,
            'message' => 'Your queue no '. $psw->id,
        ]); 

        session()->flash('message', 'The patient is assigned succesfully'); 
    } 

    public function render()
    {
        return view('livewire.hospital.doctor.requestexaminationtest')->with('user', $this->users);
    }
}
