<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use App\Models\Referal;
use App\Models\User;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Patient_waiting_list;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class Incomingrefer extends Component
{
    use WithPagination;

    public $patient_id, $user_id, $doctors = [], $users = [], $hospital_a, $status;
    public $modelId;
    public $modalFormVisible = false;

    public function assignShowModal($id)
    {
        if($this->users) {
            $this->modalFormVisible=true;
        }  
        else{
            $this->modelId = $id;

            $doctor = Doctor::all();
            foreach($doctor as $doctor)
            {
                $shift = $doctor->shift;
                //dd($shift);
                foreach($shift as $shift)
                {
                    if($shift == date('l'))
                    {
                        $this->doctors[] = Doctor::where('id', $doctor->id)->first()->user_id;
                    }
                }
            }
            foreach($this->doctors as $doctor)
            {
                $this->users[] = User::where('id', $doctor)->first();
            }

            $this->modalFormVisible=true;
        }
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
        
        $hospital_a = Employee::where('user_id', $a)->first();
     
        return[
            'user_id'=> $this->user_id,
            'status'=> "waiting",
            'hospital_id'=> $hospital_a->hospital_id,
            'patient_id'=> $this->patient_id,
        ];
    }

    public function assign()
    {
        $this->validate();
        $psw = Patient_Waiting_List::create($this->modeldata());
        $affected = DB::update("update referals set status = 'ongoing' where patient_id = ?", [$this->patient_id]);
        $this->modalFormVisible=false;
        session()->flash('message', 'Successfully assigned the referred  Patient!');
    }
    public function render()
    {
        // $userID = DB::select('select * from users where id = ?', [Auth::user()->id]);
        // dd($userID);
        $referals = DB::select('select * from referals where status = ?', ['waiting']);
        // dd($referals);
        $receptionists = DB::select('select * from employees where user_id = ?', [Auth::user()->id]);
        // dd($receptionists);
        $patients = DB::select('select * from patients');
        // dd($patients);
        return view('livewire.hospital.reception.incomingrefer', 
        [$this->users,'referals'=>$referals, 'receptionists'=>$receptionists, 'patients'=>$patients]);
    }
}
