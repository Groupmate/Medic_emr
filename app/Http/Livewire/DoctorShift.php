<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Doctor,Service};

use Illuminate\Validation\Rule;


class DoctorShift extends Component
{ 
    public $name; public $shift;
    public function create()
    {
        //$this->validate();
        Doctor_Service::create($this->modeldata());
        session()->flash('message', 'service time created Successfully.');
    }
    public function modelData()
    {
        return [
            'name'=>$this->name,
            'shift'=>$this->shift,
        ];
    } 
    // public function rules()
    // {
    //     return [
    //         'name'=>'required',
    //         'shift'=>'required',
    //     ];
    // }   
    public function render()
    {
        $dname = Doctor::all();
        $dshift = Service::all();
        return view('livewire.doctor-shift')->with('dname',$dname)->with('dshift',$dshift)
        ;
    }
}
