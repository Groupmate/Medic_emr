<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Block;
use App\Models\Room;
use App\Models\Hospital; 
use App\Models\Bed;
class ListBeds extends Component
{
    public $search=''; 
    public $hospital_id, $block, $rooms=[], $beds = [],$i;
    public function render()
    {
        $this->user_id = Auth()->user()->id;
      
        $hospital_id = Hospital::where('user_id', $this->user_id)->first()->id;
        $block = Block::where('hospital_id',$hospital_id)->with('room')->get();
        
        foreach($block as $block->room){  
            //dd( $hospital_id);
            $this->rooms[] = Room::where('id', $block->room->id)->with('bed')->get();
        }
        
        foreach($this->rooms as $room){
            foreach($room as $rooms){
                $this->beds[] = Bed::where('room_id',$rooms->id)->get();
            }
        } 
        //dd($this->beds);
       
        return view('livewire.hospital.hr.list-beds')->with('beds',$this->beds);
        // $beds=Bed::where('name','like','%'.$this->search.'%')->get();
        // return view('livewire.hospital.hr.list-beds')->with('beds',$beds);
    }
}
