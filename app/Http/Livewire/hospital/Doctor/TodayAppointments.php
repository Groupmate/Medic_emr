<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\WithPagination;
class TodayAppointments extends Component
{
    use WithPagination;

    public $name;public $firstname;public$issue_data;public $visit_date;public $description;public $status; 
    public $modalId;
    
       
  public function approve($id)
    {
        $this->modalId=$id;
        foreach (Appointment::all() as $appointment){
            
        if ( $appointment->status == 'pending'){
            $appointment->where('id', $id)->update([ 
                'status'=> 'confirmed'
            ]);}}
    }
    public function cancel($id)
    {
        $this->modalId=$id;
        foreach (Appointment::all() as $appointment){
            
        if ( $appointment->status == 'pending'){
            $appointment->where('id', $id)->update([
                'status'=> 'cancelled'
            ]);}}
    }
    public function render()
    {
        $appointment =Appointment::whereDate('issue_date',now())->where('status','pending')->get();
        
        return view('livewire.hospital.doctor.today-appointments')->with('appointment',$appointment);
       
    }
}
