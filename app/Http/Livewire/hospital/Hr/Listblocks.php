<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Block;
use App\Models\Hospital;

class Listblocks extends Component
{
    public $search='';
    public $hospital_a ,$modelId;
    public $modalConfirmDeleteVisible=false; 
    public $modalEditFormVisible=false;   
    public $name,$hospital_id,$no_room,$user_id; 
    /**
     * updateShowModal
     *
     * @param  mixed $id
     * @return void
     */
    public function editShowModal($id)
    {
        $this->modelId = $id;
        $this->modalEditFormVisible=true;
          $this->loadModel();
    }    
    /**
     * deleteShowModel
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModal($id)
    {
        $this->modelId=$id;
        $this->modalConfirmDeleteVisible=true;
    }    
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
    public function loadModel()
    {
        $block=Block::find($this->modelId);
            $this->name= $block->name;
            $this->no_room= $block->no_room;
    }     
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
       Block::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }    
    /**
     * update
    
     * @return void
     */
    public function update()
    {
        $this->validate();
        Block::find($this->modelId)->update($this->modelData());
        $this->modalEditFormVisible= false;
        // $this->resetvars();
    }  
    public function render()
    {
        $this->user_id = Auth()->user()->id;
        $hospital_a = Hospital::where('user_id', $this->user_id)->first(); 
        $this->hospital_id = $hospital_a->id;
    //    dd($this->hospital_id); 
        $blocks=Block::where('name','like','%'.$this->search.'%')->where('hospital_id',$this->hospital_id)->get();
        return view('livewire.hospital.hr.listblocks')->with('blocks',$blocks);
    }
}
