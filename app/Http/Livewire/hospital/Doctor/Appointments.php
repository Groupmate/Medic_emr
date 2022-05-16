<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patientss;
use App\Models\Appointmen;
use Livewire\WithPagination;
class Appointments extends Component
{
    use WithPagination;
    public $name;public $firstname;public$issue_data;public $visit_date;public $description;public $status; 
    public function create()
    {
        //$this->validate();
        
        
        $name = Appointmen::create($this->modeldata());
        session()->flash('message', 'service time created Successfully.');
    }
   
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'doctor_id'=>$this->name,
           
            'patientss_id'=>$this->firstname,
            'issue_data'=>$this->issue_date,
            'visit_data'=>$this->visit_date,
            'status'=>$this->status,
            'descrpition'=>$this->description,
          
             ];
    }
    /**
     * render
     *
     * @return void
     */
   
    public function render()
    {
        $dname = Doctor::all();
       $pname = Patientss::all();
       $appointment =Appointmen::all();
        return view('livewire.hospital.doctor.appointments',['appointment'=>Appointmen::paginate(5)])->with('dname',$dname)->with('pname',$pname);
    }
}
