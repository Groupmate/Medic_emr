<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use App\Models\Block;
use Illuminate\Validation\Rule;

class AddBlock extends Component
{
    public $name,$hospital_id=1,$no_room;    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Block::create($this->modeldata());
        session()->flash('message', 'Block registered Successfully.');
        $this->reset();
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
            'hospital_id'=>$this->hospital_id,
            'no_room'=>$this->no_room,
             ];
    }    
    public function rules()
    {
        return [
            'name'=>'required',
            'no_room'=>'required',
            
        ];
    }     
    public function render()
    {
        return view('livewire.hospital.hr.add-block');
    }
}
