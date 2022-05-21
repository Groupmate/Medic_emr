<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use App\Models\Room;
use App\Models\Block;
use Illuminate\Validation\Rule;


class AddRoom extends Component
{
    public $block_id,$cost,$type,$room_no,$totalcap,$department;    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Room::create($this->modeldata());
        session()->flash('message', 'room registered Successfully.');
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
            'department'=>$this->department,
            'block_id'=>$this->block_id,
            'room_no'=>$this->room_no,
            'type'=>$this->type,
            'cost'=>$this->cost,
            'totalcap'=>$this->totalcap,
             ];
    }   
    public function rules()
    {
        return [
            'block_id'=>'required',
            'totalcap'=>'required',
            'department'=>'required',
            'type'=>'required',
            'cost'=>'required',
            'room_no'=>'required',
            
        ];
    }     
    public function render()
    {
        $dname = Block::all();
        return view('livewire.hospital.hr.add-room')->with('dname',$dname);
    }
}
