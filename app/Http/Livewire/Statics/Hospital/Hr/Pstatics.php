<?php

namespace App\Http\Livewire\Statics\Hospital\Hr;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Medical_data;
use Illuminate\Support\Facades\DB;

class Pstatics extends Component
{
   
    // public function index()
    // {
    //     $patients = Patient::all();
    //     $Mdatas = Medical_data::all();

    //     $d1 = Medical_data::where('disease','  Anthrax')->get();
    //     $d1_count=Count($d1);
    //     $d2=  Medical_data::where('disease','Influenza')->get();
    //     $d3 = Medical_data::where('disease','Cholera')->get();
    //     $d4 = Medical_data::where('disease','Heatitis')->get();
    //     $d5 = Medical_data::where('disease','Malari')->get();
        
    //     foreach ($medical_datas as $medical_data) {
            
    //         $dataPoints[] = array( 
    //             "patient_id" => $medical_data('d1')
    //         );
    //     }

    //     return view("bar-graph", [
    //         "data" => json_encode($dataPoints),
    //     ]);

    // }

    public function render()
    {
        $medical_datas =  Medical_data::all();
    

        $d1 = Medical_data::where('disease','  Anthrax')->get();
        $d1_count=Count($d1);
        $d2=  Medical_data::where('disease','Influenza')->get();
        $d3 = Medical_data::where('disease','Cholera')->get();
        $d4 = Medical_data::where('disease','Heatitis')->get();
        $d5 = Medical_data::where('disease','Malari')->get();
        
        foreach ($medical_datas as $medical_data) {
            $dataregions[]=array(
                "region"=>$medical_data
            );
            $dataPoints[] = array( 
                "patient_id" => $medical_data->patient_id,
                "data" => $medical_data->disease,
                 
            );
        }
        
        return view('livewire.statics.hospital.hr.pstatics', [
            "data" => json_encode($dataPoints),
            "terms" => json_encode(array(
                "Term 1",
            )),

        ]);
    }
}