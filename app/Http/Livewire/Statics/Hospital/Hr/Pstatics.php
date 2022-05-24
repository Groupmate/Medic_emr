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
       $count  = 0; 
       $count1 = 0;
       $count2 = 0;
       $count3 = 0;
   
       $d1 = Medical_data::where('disease', 'Anthrax')->get() ; 
       $d2 = Medical_data::where('disease', 'Cholera')->get(); 
       $d3 = Medical_data::where('disease', 'Influenza')->get(); 
       $d4 = Medical_data::where('disease', 'Malari')->get(); 
     
    
       $region = array(
           array("Addis Ababa Chartered City", $count,   $count1,$count2,$count3),
           array("Dire Dawa Chartered City", $count,   $count1,$count2,$count3),
           array("Amhara Region", $count,   $count1,$count2,$count3),
           array("Afar Region", $count,   $count1,$count2,$count3),
           array("Benishangul-Gumuz Region", $count,   $count1,$count2,$count3),
           array("Gambella Region", $count,   $count1,$count2,$count3),
           array("Harari Region", $count,   $count1,$count2,$count3),
           array("Oromia Region", $count,   $count1,$count2,$count3),
           array("Sidama Region", $count,   $count1,$count2,$count3),
           array("Somali Region", $count,   $count1,$count2,$count3),
           array("SNNPR Region", $count,   $count1,$count2,$count3),
           array("SWENP Region", $count,   $count1,$count2,$count3),
           array("Tigrayi Region", $count,   $count1,$count2,$count3)
       );

        foreach ($d1 as $d1) {
           $datapatient[]= array( 
                "patient_id" => $d1->patient_id,
            );
        }
        foreach ($d2 as $d2) {
            $datapatient1[]= array( 
                 "patient_id" => $d2->patient_id,
             );
         }
         foreach ($d3 as $d3) {
            $datapatient2[]= array( 
                 "patient_id" => $d3->patient_id,
             );
         }
         foreach ($d4 as $d4) {
            $datapatient3[]= array( 
                 "patient_id" => $d4->patient_id,
             );
         }
         
        foreach($datapatient as $datapatient) { 
            for ($row = 0; $row < 12; $row++) {  
                $patient = Patient::where('id', $datapatient["patient_id"])->where('region', $region[$row])->first(); 
            
            if($patient)
            {
                $region[$row][1]++;
               }
            } 
        }
         foreach($datapatient1 as $datapatient1) { 
            for ($row = 0; $row < 12; $row++) {  
                $patient = Patient::where('id', $datapatient1["patient_id"])->where('region', $region[$row])->first(); 
            
            if($patient)
            {
                $region[$row][2]++;
               }
            } 
        }
        foreach($datapatient2 as $datapatient2) { 
            for ($row = 0; $row < 12; $row++) {  
                $patient = Patient::where('id', $datapatient2["patient_id"])->where('region', $region[$row])->first(); 
            
            if($patient)
            {
                $region[$row][3]++;
               }
            } 
        }
        foreach($datapatient3 as $datapatient3) { 
            for ($row = 0; $row < 12; $row++) {  
                $patient = Patient::where('id', $datapatient3["patient_id"])->where('region', $region[$row])->first(); 
            
            if($patient)
            {
                $region[$row][4]++;
               }
            } 
        }
        
        
     

       for($row = 0; $row < 12; $row++) {
           $names = $region[$row][$count];
           $name[]=$names;

           }
      
          
       for ($row = 0; $row < 12; $row++) {
           $datas= $region[$row][1];
            $data0[]=$datas;     
       }
       for ($row = 0; $row < 12; $row++) {
        $datas1= $region[$row][2];
        $data1[]=  $datas1;     
       }
       for ($row = 0; $row < 12; $row++) {
        $datas2= $region[$row][3];
        $data2[]=  $datas2;     
       }
       for ($row = 0; $row < 12; $row++) {
        $datas3= $region[$row][4];
        $data3[]=  $datas3;     
       }
       
     //dd($data3);

       for( $key = 0; $key < 12; $key++){ 
      
        foreach($data0 as $key=>$value ){
            $val=$data1[$key];
            $val2=$data2[$key];
            $val3 =$data3[$key];
            $data[$key]=array($value,$val, $val2,$val3);
          }
        
       }
        //dd($data);
        $array3=array();
        $new=count($name);
        for( $key = 0; $key < $new; $key++){
            $array1 = $name[$key];
            $array2 = $data[$key];
            $array3  += [$array1 => $array2];
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
           "Covid-19",
           "Cholera",
           "Infulenza",
           "Malari",
         )),
   ]);
}
}














































//     public function render()
//     {
//         $medicalData = Medical_data::with('patient')->get();
//         //dd($medicalData);
//         $regionWithDisease = [
//             "Addis Ababa Chartered City" => [],
//             "Dire Dawa Chartered City"  => [],
//             "Amhara Region"  => [],
//             "Afar Region" => [],
//             "Benishangul-Gumuz Region"  => [],
//             "Gambella Region"  => [],
//             "Harari Region"  => [],
//             "Oromia Region"  => [],
//             "Sidama Region"  => [],
//             "Somali Region" => [],  
//             "SNNPR Region" => [],  
//             "SWENP Region"  => [],
//             "Tigrayi Region" => [],
//         ];

//         foreach($medicalData as $patientRecord)
//         {
//             $currentRegion = $regionWithDisease[$patientRecord->patient->region];
//             if(array_key_exists($patientRecord->disease, $currentRegion)) {
//                 $currentRegion[$medicalData->disease]++;
//             }
//             else{
//                 $currentRegion[$patientRecord->disease]=1;
//             }
           
//         }
//         dd(  $currentRegion);

        
        
//          return view('livewire.statics.hospital.hr.pstatics',[
//             "data"=> json_encode( $currentRegion),
//             "terms" =>json_encode(array(
//                 "Antrax",
//                 "Infulenza",
//               )),
//         ]);
//     }
// }


        // $patientRecord
        // $nopat = 0; 
        // $d1 = Medical_data::where('disease', 'Anthrax')->get(); 
        // $d2 = Medical_data::where('disease', 'Cholera')->get(); 
        // //$d_list=array($d1,$d2,$d3,$d4);
        // //dd( $d_list);
       
        // $region = array (
        //      "Addis Ababa Chartered City" ,
        //      "Dire Dawa Chartered City" ,
        //      "Amhara Region" ,
        //      "Benishangul-Gumuz Region" ,
        //      "Gambella Region" ,
        //      "Harari Region" ,
        //      "Oromia Region" ,
        //      "Sidama Region" ,
        //      "Somali Region",  
        //      "SNNPR Region",  
        //      "SWENP Region" ,
        //      "Tigrayi Region",
        // );
        // $count = array(
        //     array("Anthrax", $nopat),
        //     array("Cholera", $nopat),
        // );

        // $array3=array(); 
        
        // for( $key = 0; $key < 12; $key++){
        //     $array1 = $region[$key];   
        //     $array3  += [$array1 =>  $count];
        // }
        // //dd($array3);
   

        // foreach ($d1 as $d1) {
        //     $datapatient1[]=array(
        //         "patient_id" => $d1->patient_id,
        //         "disease" => $d1->disease,
        //     );
        // }
        // foreach ($d2 as $d2) {
        //     $datapatient2[] = array(
        //         "patient_id" => $d2->patient_id,
        //         "disease" => $d2->disease,
        //     );
        // }
    
        // $datapatient =array(
        //     $datapatient1,
        //     $datapatient2,  
        // );
     
        
        // foreach ($datapatient as $datapatient => $value) {
        //     //dd($datapatient);
        //     foreach($value as $value){

        //         for ($row = 0; $row < 12; $row++) {  
        //             $patient = Patient::where('id', $value["patient_id"])->where('region', $region[$row])->first(); 
                    
        //             if($patient)
        //             { 
        //                 foreach($array3 as $key => $count){
        //                     //dd($count);
        //                     foreach($count as $count){
        //                         if($value["disease"] == $count[0] ){
        //                             $count[1]++;
        //                         }
        //                     }
        //                 }
        //                 dd($array3);
                        
        //             }
                
        //         } 
        //     }
        // }
       
        // dd($array3);
        
        // for($row = 0; $row < 12; $row++) {
        //     $names = $region[$row][$count];
        //     $name[]=$names;
 
        //     }

           
        // for ($row = 0; $row < 12; $row++) {
        //     $datas= $region[$row][1];
        //     $data[]=$datas;     
        // }
        
        // dd($datapatient);

   
            
        //     foreach ($d1 as $d1) {
        //         $datapatient1 = $d1->patient_id;
        //     }
        //     foreach ($d2 as $d2) {
        //         $datapatient2 = $d2->patient_id;
        //     }
        
        //     $datapatient =array(
        //         $datapatient1,
        //         $datapatient2,  
        //     );
        //     dd($datapatient);

    

       

        //        foreach ($datapatient as $datapatient) { 
                
        //         for ($row = 0; $row < 12; $row++) {  
        //             for($i=0; $i<2; $i++){
        //                 $patient = Patient::where('id', $datapatient["patient_id"])->where('region', $region[$row])->first(); 
        //             }
        //             if($patient)
        //             {
        //                 $region[$row][1]++;
        //             }
                
        //         }  
        //     }  
       
        
      

        // $new = count($name);
        // $array3=array();
    
        // for( $key = 0; $key < $new; $key++){
        //     $array1 = $name[$key];
        //     $array2 = $data[$key];
        //     $array3  += [$array1 => [ $array2]];
        // }
         
        // foreach ($array3 as $key => $key_value) { 
        //     $list[]=array(
        //         "name" =>  $key ,
        //         "data" => $key_value,
        //     );
            
        // }
      //  dd( $list);


















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
