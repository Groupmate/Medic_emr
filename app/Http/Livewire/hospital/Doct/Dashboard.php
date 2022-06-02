<?php

namespace App\Http\Livewire\Hospital\Doct;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Patient_Waiting_List;
use App\Models\Hospital;
use App\Models\medical_data;
use App\Models\Appointment;
use Carbon\Carbon;

class Dashboard extends Component
{
    public function render()
    {
        $Newassignpatients =  Patient_Waiting_List::where('status','Waiting')->get();
        $patient_waiting_count =count($Newassignpatients);

        $TotalPatient = Hospital::leftJoin('medical_datas', 'hospitals.id', '=', 'medical_datas.id')
                        ->select('medical_datas.patient_id')
                        ->where('medical_datas.hospital_id' , 151)
                        ->get();
        $TotalPatients = count( $TotalPatient);
    
        $TodayAppointment =  Appointment::leftJoin('patients', 'appointments.patient_id', '=', 'patients.id')
                            ->select('appointments.patient_id','patients.first_name', 'patients.last_name','appointments.visit_date')
                            ->where('appointments.status', 'active')
                            ->whereDate('visit_date', Carbon::today())
                            ->orderBy('appointments.visit_date', 'desc')
                            ->take(10)->get();
        $appt = $TodayAppointment->toArray(); 
       
        $NoTodayAppointment = count($TodayAppointment); 

       
      
        return view('livewire.hospital.doct.dashboard',compact('patient_waiting_count','NoTodayAppointment', 'TotalPatients' ,'appt'));
    }
}
