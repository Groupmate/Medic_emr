<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Block;
use App\Models\Hospital;
use Illuminate\Validation\Rule;

class AddRoom extends Component
{
    public $block_id,$cost,$type,$room_no,$totalcap,$department,$user_id,$hospital_id;    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Room::create($this->modeldata());
        // return redirect()->to('/bed');
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
        $this->user_id = Auth()->user()->id;
        $hospital_a = Hospital::where('user_id', $this->user_id)->first(); 
        $this->hospital_id = $hospital_a->id;
        $dname = Block::where('hospital_id',$this->hospital_id)->get();
        return view('livewire.hospital.hr.add-room')->with('dname',$dname);
    }
}

