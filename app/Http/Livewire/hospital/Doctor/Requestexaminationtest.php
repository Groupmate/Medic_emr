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
       $docid = Auth()->user()->id;
       $doctor = Doctor::where('user_id', $docid)->first();
       $this->hospital_id = $doctor->hospitals->first()->id;
    }

    public function request()
    {
        $this->modelId = $this->patient_id;

        $employee = Employee::all();
        $employeeInfo = Employee::leftJoin('users' , 'employees.user_id' ,'=','users.id')
                      ->select('users.role', 'employees.shift', 'employees.id')
                      ->where('hospital_id', $this->hospital_id)
                      ->get();
                     
        foreach($employeeInfo as $employee)
        {
            if($employee->role == 6){

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
        session()->flash('message', 'The patient is assigned succesfully'); 
    } 

    public function render()
    {
        return view('livewire.hospital.doctor.requestexaminationtest');
    }
}
