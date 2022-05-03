<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use App\Models\Service ;
use Illuminate\Validation\Rule;

class Services extends Component
{
    public $name;
    public $duration;
    
    /**
     * create
     *
     * @return void
     */
  
    public function create()
    {
        $this->validate();
        Services::create($this->modeldata());
        session()->flash('message', 'service time created Successfully.');
        // $this->reset();
    }        
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'name'=>$this->name,
            'duration'=>$this->duration,
        ];
    }    
    /**
     * validate the inputs
     *
     * @return void
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'duration'=>'required',
        ];
    }
    public function render()
    {
        return view('livewire.hospital.hr.services');
    }
}
