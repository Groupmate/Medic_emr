<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Block;
use App\Models\Hospital;
use Illuminate\Validation\Rule;

class AddBlock extends Component
{
    public $name,$hospital_id,$no_room,$user_id;    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
       
        $this->validate();
       
        Block::create($this->modeldata());
        // return redirect()->to('/room');
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
        $this->user_id = Auth()->user()->id;
        $hospital_a = Hospital::where('user_id', $this->user_id)->first(); 
        $this->hospital_id = $hospital_a->id;
    //    dd($this->hospital_id);
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
