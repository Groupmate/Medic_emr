<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Room;
use App\Models\Bed;
class AddBed extends Component
{
    public $status,$room_id,$name; 
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Bed::create($this->modeldata());
        session()->flash('message', 'bed registered Successfully.');
         $this->reset();
        //  return redirect()->to('/bedassignment');
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
            'room_id'=>$this->room_id,
            'status'=>$this->status,
             ];
    }    
    public function rules()
    {
        return [
            'name'=>'required',
            'status'=>'required',
            'room_id'=>'required',
            
        ];
    } 
    public function render()
    {
        
        $dname = Room::all();
        return view('livewire.hospital.hr.add-bed')->with('dname',$dname);
    }
}
