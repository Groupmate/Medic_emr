<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Room;
use App\Models\Block;
use App\Models\Bed;
use App\Models\Bedassignment;
use App\Models\Patient;
class BedAssignments extends Component
{
    public $selectedBlock=null;
    public $selectedBed=null;
    public $selectedRoom=null;
    public $patient_id;  
     public $rooms;
     public $allotment_time;
     public $beds;
     public $modalId;
     public $search='';
     public function create()
     {
        $this->validate();
        Bedassignment::create($this->modeldata());
        $bed = Bed::where('id', $this->selectedBed)->first();
        $bed->status = "busy"; 
        $bed->save();  
               
        session()->flash('message', 'bed registered  Successfully .');
        $this->reset();
     }
     public function modelData()
    {
        return [
            'patient_id'=>$this->patient_id,
            'room_id'=>$this->selectedRoom,
            'block_id'=>$this->selectedBlock,
            'bed_id'=>$this->selectedBed,
            'allotment_time'=>$this->allotment_time,
             ];
    }        
    /**
     * rules validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'patient_id'=>'required',
            'selectedBlock'=>'required',
            'selectedRoom'=>'required',
            'selectedBed'=>'required',
            'allotment_time'=>'required',
            
        ];
    } 
     public function mount()
     {
        
         $this->rooms = collect();
         $this->beds = collect();
     }
     public function render()
     {   $patients = Patient::where('firstname','like','%'.$this->search.'%')->get();
         $blocks = Block::all();
         return view('livewire.hospital.hr.bed-assgniments')->with('patients',$patients)->with('blocks',$blocks);
     }
    public function updatedSelectedBlock($block)
    { 
        if (!is_null($block)) 
        {
            $this->rooms = Room::where('block_id',$block)->get();
        }
        
    }
    public function updatedSelectedRoom($room)
    { 
        if (!is_null($room)) 
        {
            $this->beds = Bed::where('room_id',$room)->
            where('status','free')->get();
        }
        
    }
}
