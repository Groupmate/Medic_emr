<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Medical_data;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient_Waiting_List;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon ;


class HospitalStatics extends Component
{
    public function render()
    {
        $TotalUsers = User::get();
        
        $TotalDoctor = Doctor::get();
        $INP =Doctor::where('department','IPD')->get();
        $OP = Doctor::where('department','OPD')->get();
        $EMP = Doctor::where('department','Emergency')->get();

      
        $TotalMPatient = Patient::leftJoin('medical_datas', 'patients.id', '=', 'medical_datas.patient_id')
                    ->select('patients.first_name','medical_datas.disease','medical_datas.created_at')
                    ->whereYear('medical_datas.created_at', '<=', date('2022-01-01'))
                    ->whereYear('medical_datas.created_at', '>=', Carbon::now())
                    ->where('patients.sex', 'male')
                    ->where('medical_datas.user_id' , 1)
                    ->orderBy('medical_datas.created_at')
                    ->get()->toArray();
       
        $TotalWPatient = Patient::leftJoin('medical_datas', 'patients.id', '=', 'medical_datas.patient_id')
                    ->select('patients.first_name','medical_datas.disease','medical_datas.created_at')
                    ->whereYear('medical_datas.created_at', '<=', date('2022-01-01' ))
                    ->whereYear('medical_datas.created_at', '>=', Carbon::now())
                    ->where('patients.sex', 'female')
                    ->where('medical_datas.user_id' , 1)
                    ->orderBy('medical_datas.created_at')
                    ->get()->toArray();
        $TotalPatient = Patient::leftJoin('medical_datas', 'patients.id', '=', 'medical_datas.patient_id')
                    ->select('patients.first_name','medical_datas.disease','medical_datas.created_at')
                    ->whereYear('medical_datas.created_at', '<=', date('2022-01-01'))
                    ->whereYear('medical_datas.created_at', '>=', Carbon::now())
                    ->where('medical_datas.user_id' , 1)
                    ->orderBy('medical_datas.created_at')
                    ->get()->toArray();
        
        // foreach ($TotalPatientD as $key => $key_value) { 
            
        // }
        // dd($TotalMPatient);
        // dd($TotalWPatient);
        // dd($WeeklyAppointment);
        return view('livewire.statics.hospital-statics');
    }
}
