<?php
namespace App\Http\Livewire\Statics\Hospital\Hr;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Medical_data;
use Illuminate\Support\Facades\DB;

class Pstatics extends Component
{
   public $region;
   

    public function render()
    {
        $count = 0; 
        $d1 = Medical_data::where('disease', 'Anthrax')->get(); 
        $d2 = Medical_data::where('disease', 'Cholera')->get(); 
        //$d_list=array($d1,$d2,$d3,$d4);
        //dd( $d_list);
       
        $region = array(
            array("Addis Ababa Chartered City", $count),
            array("Dire Dawa Chartered City", $count),
            array("Amhara Region", $count),
            array("Afar Region", $count),
            array("Benishangul-Gumuz Region", $count),
            array("Gambella Region", $count),
            array("Harari Region", $count),
            array("Oromia Region", $count),
            array("Sidama Region", $count),
            array("Somali Region", $count),
            array("SNNPR Region", $count),
            array("SWENP Region", $count),
            array("Tigrayi Region", $count)
        );

        // foreach ($d1 as $d1) {
        //     $datapatient[]=array(
        //         "patient_id" => $d1->patient_id,
        //     );
        // }

        foreach ($d1 as $d1) {
            $datapatient1[]=array(
                "patient_id" => $d1->patient_id,
            );
        }
        foreach ($d2 as $d2) {
            $datapatient2[] = array(
                "patient_id" => $d1->patient_id,
            );
        }
    
        $datapatient =array(
            $datapatient1,
            $datapatient2,  
        );
     
       // dd($datapatient);
        foreach ($datapatient as $datapatient => $value) {
            foreach($value as $value){

                for ($row = 0; $row < 12; $row++) {  
                    $patient = Patient::where('id', $value["patient_id"])->where('region', $region[$row])->first(); 
                    
                    if($patient)
                    {
                        $region[$row][1]++;
                    }
                
                } 
            }
        }
       
        
        for($row = 0; $row < 12; $row++) {
            $names = $region[$row][$count];
            $name[]=$names;
 
            }

           
        for ($row = 0; $row < 12; $row++) {
            $datas= $region[$row][1];
            $data[]=$datas;     
        }
        dd($data );
        
        dd($datapatient);

   
            
            // foreach ($d1 as $d1) {
            //     $datapatient1 = $d1->patient_id;
            // }
        //     foreach ($d2 as $d2) {
        //         $datapatient2 = $d2->patient_id;
        //     }
        
        //     $datapatient =array(
        //         $datapatient1,
        //         $datapatient2,  
        //     );
        //     dd($datapatient);

      
            $count = 0; 
            $d1 = Medical_data::where('disease', 'Anthrax')->get(); 
            $d2 = Medical_data::where('disease', 'Cholera')->get(); 
            //$d_list=array($d1,$d2,$d3,$d4);
            //dd( $d_list);
           
            $region = array(
                array("Addis Ababa Chartered City", $count),
                array("Dire Dawa Chartered City", $count),
                array("Amhara Region", $count),
                array("Afar Region", $count),
                array("Benishangul-Gumuz Region", $count),
                array("Gambella Region", $count),
                array("Harari Region", $count),
                array("Oromia Region", $count),
                array("Sidama Region", $count),
                array("Somali Region", $count),
                array("SNNPR Region", $count),
                array("SWENP Region", $count),
                array("Tigrayi Region", $count)
            );

        foreach ($d1 as $d1) {
            $datapatient1 = $d1->patient_id;
        }

               foreach ($datapatient as $datapatient) { 
                
                for ($row = 0; $row < 12; $row++) {  
                    for($i=0; $i<2; $i++){
                        $patient = Patient::where('id', $datapatient["patient_id"])->where('region', $region[$row])->first(); 
                    }
                    if($patient)
                    {
                        $region[$row][1]++;
                    }
                
                }  
            }  
       
        
           
            for($row = 0; $row < 12; $row++) {
                $names = $region[$row][$count];
                $name[]=$names;
     
                }
    
               
            for ($row = 0; $row < 12; $row++) {
                $datas= $region[$row][1];
                $data[]=$datas;     
            }
            dd($data );

        $new = count($name);
        $array3=array();
    
        for( $key = 0; $key < $new; $key++){
            $array1 = $name[$key];
            $array2 = $data[$key];
            $array3  += [$array1 => [ $array2]];
        }
         
        foreach ($array3 as $key => $key_value) { 
            $list[]=array(
                "name" =>  $key ,
                "data" => $key_value,
            );
            
        }
      //  dd( $list);
        
        
         return view('livewire.statics.hospital.hr.pstatics',[
            "data"=> json_encode( $list),
            "terms" =>json_encode(array(
                "Antrax",
                "Infulenza",
              )),
        ]);
    }
}





















 // public function index()
    // {
    //     $patients = Patient::all();
    //     $Mdatas = Medical_data::all();


        
    //     foreach ($medical_datas as $medical_data) {
            
    //         $dataPoints[] = array( 
    //             "patient_id" => $medical_data('d1')
    //         );
    //     }

    //     return view("bar-graph", [
    //         "data" => json_encode($dataPoints),
    //     ]);

    // }
    // //-----------------------------------------------------------------------------------------------------------
    // $medicalData = Medical_data::with('patient')->get();
    // //dd($medicalData);
    // $regionWithDisease = [
    //     "Addis Ababa Chartered City" => [],
    //     "Dire Dawa Chartered City"  => [],
    //     "Amhara Region"  => [],
    //     "Afar Region" => [],
    //     "Benishangul-Gumuz Region"  => [],
    //     "Gambella Region"  => [],
    //     "Harari Region"  => [],
    //     "Oromia Region"  => [],
    //     "Sidama Region"  => [],
    //     "Somali Region" => [],  
    //     "SNNPR Region" => [],  
    //     "SWENP Region"  => [],
    //     "Tigrayi Region" => [],
    // ];

    // foreach($medicalData as $patientRecord)
    // {
    //     $currentRegion = $regionWithDisease[$patientRecord->patient->region];
    //     if(array_key_exists($patientRecord->disease, $currentRegion)) {
    //         $currentRegion[$medicalData->disease]++;
    //     }
    //     else{
    //         $currentRegion[$patientRecord->disease]=1;
    //     }
       
    // }
    // dd(  $currentRegion);
    // -------------------------------------------------------------------------------------------------------------------------