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
        $TotalPatients = Hospital::leftJoin('medical_datas', 'hospitals.id', '=', 'medical_datas.hospital_id')
                        ->select('medical_datas.patient_id')
                        ->where('medical_datas.hospital_id' , 151)
                        ->get()->count();
                        
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
       
        $NoTodayAppointment = Appointment::where('visit_date', Carbon::now()->toDateString())
                            ->where('status', 'active')->where('doctor_id', $doctor->id)->count();
        $WeeklyAppointment = Appointment::leftJoin('patients', 'appointments.patient_id', '=', 'patients.id')
                            ->select('patients.first_name','patients.last_name','appointments.issue_date','appointments.visit_date')
                            ->whereBetween('appointments.visit_date', [$startDate, $endDate])
                            ->orderBy('appointments.visit_date')
                            ->get();                 
        $TodayAppointment =  Appointment::leftJoin('patients', 'appointments.patient_id', '=', 'patients.id')
                            ->select('appointments.patient_id','patients.first_name', 'patients.last_name','appointments.visit_date')
                            ->where('appointments.status', 'Pending')
<<<<<<< Updated upstream
                            ->whereDate('visit_date', Carbon::today())
                            ->orderBy('appointments.visit_date', 'desc')
                            ->take(10)->get();                      
        
=======
                            ->whereDate('visit_date', Carbon::today()) 
                            ->orderBy('appointments.visit_date', 'desc')
                            ->take(10)->get();
        //dd($TodayAppointment);
>>>>>>> Stashed changes
        return view('livewire.hospital.doctor.dashboard',compact(
            'patient_waiting_count','NoTodayAppointment', 'TotalPatients'   
        ))->with('WeeklyAppointment',$WeeklyAppointment)->with('appt',$TodayAppointment);
    }
}