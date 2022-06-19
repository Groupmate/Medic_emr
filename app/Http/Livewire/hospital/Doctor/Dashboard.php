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
use Carbon\CarbonImmutable;

class Dashboard extends Component
{
    public function render()
    {
        $now = CarbonImmutable::now();
        $weekStartDate = $now->startOfWeek();
        $weekEndDate = $now->endOfWeek();
        $patient_waiting_count =  Patient_Waiting_List::where('status','Waiting')->where('user_id', Auth::user()->id)->count(); 
        $totalPatientvisited  = Patient_Waiting_List::whereDate('created_at','>=', $weekStartDate)->whereDate('created_at', '<=', $weekEndDate)->where('user_id', Auth::user()->id)->where('status','examined')->count();
        // dd($totalPatient);
        $id = Auth()->user()->id; 
        $doctor = Doctor::where('user_id', $id)->first()->id; 
        $TotalPatients = Hospital::leftJoin('medical_datas', 'hospitals.id', '=', 'medical_datas.hospital_id')
                        ->select('medical_datas.patient_id')
                        ->where('medical_datas.hospital_id' , 151)
                        ->get()->count();   
                        
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
       
        $NoTodayAppointment = Appointment::where('visit_date', Carbon::now()->toDateString())
                            ->where('status', 'waiting')->where('user_id', $doctor)->count(); 
        $WeeklyAppointment = Appointment::leftJoin('patients', 'appointments.patient_id', '=', 'patients.id')
                            ->select('patients.firstname','patients.lastname','appointments.issue_date','appointments.visit_date')
                            ->whereBetween('appointments.visit_date', [$startDate, $endDate])
                            ->orderBy('appointments.visit_date')
                            ->get();                 
        $TodayAppointment =  Appointment::leftJoin('patients', 'appointments.patient_id', '=', 'patients.id')
                            ->select('appointments.patient_id','patients.firstname', 'patients.lastname','appointments.visit_date')
                            ->where('appointments.status', 'Pending')
                            ->whereDate('visit_date', Carbon::today()) 
                            ->orderBy('appointments.visit_date', 'desc')
                            ->take(10)->get();
        //dd($TodayAppointment);
        return view('livewire.hospital.doctor.dashboard',compact(
            'patient_waiting_count','NoTodayAppointment', 'TotalPatients', 'totalPatientvisited'   
        ))->with('WeeklyAppointment',$WeeklyAppointment)->with('appt',$TodayAppointment);
    }
}