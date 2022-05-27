<?php

namespace App\Http\Livewire\Statics\Hospital\Hr;

use Livewire\Component;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Organization;
use App\Models\Appointment;
use App\Models\Medical_data;

use Illuminate\Support\Facades\DB;


class Satatics extends Component
{
    public function statics(){

        $medicalData = Medical_data::with('patient')->get();
       
        $regionWithDisease = [
            "Addis Ababa Chartered City" => [],
            "Dire Dawa Chartered City"  => [],
            "Amhara Region"  => [],
            "Afar Region" => [],
            "Benishangul-Gumuz Region"  => [],
            "Gambella Region"  => [],
            "Harari Region"  => [],
            "Oromia Region"  => [],
            "Sidama Region"  => [],
            "Somali Region" => [],  
            "SNNPR Region" => [],  
            "SWENP Region"  => [],
            "Tigrayi Region" => [],
        ];

        foreach($medicalData as $patientRecord)
        {
            $currentRegion = $regionWithDisease[$patientRecord->patient->region];
            if(array_key_exists($patientRecord->disease, $currentRegion)) {
                $currentRegion[$medicalData->disease]++;
            }
            else{
                $currentRegion[$patientRecord->disease]=1;
            }
           
        }
        dd(  $currentRegion);

        $opd = Doctor::where('department','IPD')->get();
        $ipd = Doctor::where('department','OPD')->get();
        $emergency= Doctor::where('department','Emergency')->get();
        $opd_count=count($opd);
        $ipd_count=count($ipd);
        return view('livewire.statics.hospital.hr.satatics');
    }
    public function render()
    {
        return view('livewire.statics.hospital.hr.satatics');
    }
}
