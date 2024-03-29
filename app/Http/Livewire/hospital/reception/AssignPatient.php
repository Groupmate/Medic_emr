<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\User;
use App\Models\Patient_waiting_list;

class AssignPatient extends Component
{
    use WithPagination;

    public $patient_id, $user_id, $doctors = [], $users = [], $available_doctors, $patients,
    $hospital_a,$status;
    public $modelId;
    public $modalFormVisible = false;

    public function mount(Patient $patients)
    {
        $this->patients = $patients;
    }

    /**
     * createShowModal show modal
     *
     * @return void
     */
    public function createShowModal($id)
    {
        $this->modelId = $id;

        $doctor = Doctor::all();
        foreach($doctor as $doctor)
        {
            $shift = $doctor->shift;
            foreach($shift as $shift)
            {
                if($shift == date('l'))
                {
                    $this->doctors[] = Doctor::where('id', $doctor->id)->pluck('user_id')->toArray();
                }
            }
        }
        foreach($this->doctors as $doctor)
        {
            $this->users[] = User::where('id', $doctor)->first();
        }

        $this->modalFormVisible=true;
        //dd($this->modalFormVisible);
    }

    public function rules()
    {
        return[
            'user_id' => 'required',
        ];
    }

    public function modeldata()
    {
        $this->patient_id=$this->modelId;

        $a = Auth()->user()->id;
        $hospital_a = Employee::where('user_id', $a)->first()->hospital_id;
       // dd($hospital_a);
        return[
            'user_id'=> $this->user_id,
            'status'=> "appointed",
            'hospital_id'=> $hospital_a,
            'patient_id'=> $this->patient_id,
        ];
    }

    public function create()
    {
        $this->validate();
        $psw = Patient_Waiting_List::create($this->modeldata());

        $this->modalFormVisible=false;
    }
    public function render()
    {
        $patients = Patient::all();

        return view('livewire.hospital.reception.assign-patient',[
            $this->patients = Patient::all(),$this->users
        ]);
    }
}
