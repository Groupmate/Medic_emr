<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Block;
use App\Models\Room;
use App\Models\Hospital; 
class ListRooms extends Component
{
    public $search='',$modelId;
    public $modalConfirmDeleteVisible=false;
    public $modalEditFormVisible=false;   
    public $hospital_id, $block, $rooms=[];    
    /**
     * deleteShowModal
     *
     * @param  mixed $id
     * @return void
     */
    public function editShowModal($id)
    {
        $this->modelId=$id;
      $this->modalEditFormVisible=false;  
        
    } 
  
    public function deleteShowModal($id)
    {
        $this->modelId=$id;
        $this->modalConfirmDeleteVisible=true;
        
    } 
  
    public function render()
    {
        $this->user_id = Auth()->user()->id;
    
        $hospital_id = Hospital::where('user_id', $this->user_id)->first()->id;
        $this->block = Block::where('hospital_id',$hospital_id)->with('room')->get();
        foreach($this->block as $block){
       
            $this->rooms[] = Room::where('block_id',$block->id)->get();
        }
       // dd($this->rooms);
    
            //$this->rooms=Room::where('block_id',$block_id)->get();
        
       
        return view('livewire.hospital.hr.list-rooms')->with('rooms',$this->rooms);
    
    }
}
