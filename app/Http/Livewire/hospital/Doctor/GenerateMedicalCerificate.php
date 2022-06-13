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
    public function mount($id)
    { 
       $this->patient_id = $id; 
    }
   
    public function generateMedicalPDF() {
        $patientID   = $this->patient_id;
        $PatientInfo = Medical_data::leftJoin('patients','medical_datas.patient_id', '=', 'patients.id')
                        ->select('patients.id','medical_datas.diagnosis_info','medical_datas.description','patients.firstname','patients.lastname','patients.email','patients.national_id','date_of_birth','patients.region',
                        'patients.zone','patients.city','patients.updated_at')
                        ->where('patients.id',$patientID)
                        ->first();
        $userID      = Auth::user()->id;
        $DoctorInfo  = User::select('firstname','lastname')
                        ->where('users.id', $userID )->first();
    
        $pdf = PDF::loadView('livewire.hospital.doctor.generate-medical-cerificate',compact('DoctorInfo','PatientInfo'));
    
        return $pdf->download('MedicalCertificate.pdf');
    }
                                     

    public function render()
    {
        $patientID   = $this->patient_id;
        $PatientInfo = Medical_data::leftJoin('patients','medical_datas.patient_id', '=', 'patients.id')
                        ->select('patients.id','medical_datas.diagnosis_info','medical_datas.description','patients.firstname','patients.lastname','patients.email','patients.national_id','date_of_birth','patients.region',
                        'patients.zone','patients.city','patients.updated_at')
                        ->where('patients.id',$patientID)
                        ->first();
        $userID      = Auth::user()->id;
        $DoctorInfo  = User::select('firstname','lastname')
                        ->where('users.id', $userID )->first();
        return view('livewire.hospital.doctor.generate-medical-cerificate',compact('DoctorInfo','PatientInfo'));
    }
}

