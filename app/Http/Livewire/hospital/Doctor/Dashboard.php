<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Patient_Waiting_List;
use App\Models\Hospital;
use App\Models\Medical_data;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Dashboard extends Component
{
    public function render()
    {
        $patient_waiting_count =  Patient_Waiting_List::where('status','Waiting')->count(); 

        $id = Auth()->user()->id; 
        $doctor = Doctor::where('user_id', $id)->first();
        $TotalPatient = Hospital::leftJoin('medical_datas', 'hospitals.id', '=', 'medical_datas.id')
                        ->select('medical_datas.patient_id')
                        ->where('medical_datas.hospital_id' , 151)
                        ->get();
        $TotalPatients = count( $TotalPatient);
        
        $NoTodayAppointment = Appointment::where('visit_date', Carbon::now()->toDateString())
                                        ->where('status', 'active')->where('doctor_id', $doctor->id)->count();
                                          
        return view('livewire.hospital.doctor.dashboard',compact(
            'patient_waiting_count','NoTodayAppointment', 'TotalPatients'   
        ));
    }
}