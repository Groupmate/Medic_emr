<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Medical_data;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\FromCollection;
use PDF;
class GenerateMedicalCerificate extends Component
{
    public function generatePDF()
    {
        $patientID   =Auth::user()->id;
        $PatientInfo = Medical_data::leftJoin('patients', 'medical_datas.patient_id', '=', 'patients.id')
                        ->select('patients.id','medical_datas.diagnosis_info','patients.first_name','patients.last_name','patients.email','patients.national_id','date_of_birth','patients.region',
                                'patients.zone','patients.city','patients.updated_at')
                        ->where('patients.id',$patientID)
                        ->get()->toArray();
                        //dd($PatientInfo);
        $userID      = Auth::user()->id;
        $DoctorInfo  = User::select('first_name','last_name')
                        ->where('users.id', $userID )->get(); 
        $users = User::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('itsolutionstuff.pdf');
    }
    

    public function render()
    {
        // $DoctorInfo = Medical_data::leftJoin('users','medical_datas.user_id', '=','users.id')
        //                 ->select('medical_datas.diagnosis_info','users.first_name','users.last_name')
        //                 ->get()->toArray();
        $patientID   =Auth::user()->id;
        $PatientInfo = Medical_data::leftJoin('patients', 'medical_datas.patient_id', '=', 'patients.id')
                        ->select('patients.id','medical_datas.diagnosis_info','patients.first_name','patients.last_name','patients.email','patients.national_id','date_of_birth','patients.region',
                                'patients.zone','patients.city','patients.updated_at')
                        ->where('patients.id',$patientID)
                        ->get()->toArray();
                        //dd($PatientInfo);
        $userID      = Auth::user()->id;
        $DoctorInfo  = User::select('first_name','last_name')
                        ->where('users.id', $userID )->get(); 
                                          
        return view('livewire.hospital.doctor.generate-medical-cerificate',compact('DoctorInfo','PatientInfo'))->with('PatientInfo', $PatientInfo);
    }
}

