<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Medical_data;
use App\Models\Appointment;
use App\Models\Patient_Waiting_List;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HospitalStatics extends Component
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
    
        $TodayAppointment =  Appointment::leftJoin('patients', 'appointments.id', '=', 'patients.id')
                            ->select('patients.id','patients.first_name', 'appointments.visit_date')
                            ->where('appointments.status', 'active')
                           // ->whereDate('visit_date', Carbon::today())
                            ->get();
        dd( $TodayAppointment );
    
        return view('livewire.statics.hospital-statics',compact('patient_waiting_count','TotalPatients'));
    }
}
