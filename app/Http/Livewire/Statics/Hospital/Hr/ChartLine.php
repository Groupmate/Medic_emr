<?php

namespace App\Http\Livewire\Statics\Hospital\Hr;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class ChartLine extends Component
{
    public function render()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
       
        $appt = Appointment::select(DB::raw("COUNT(*) as count"))
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
                 
        $months = User::select(DB::raw("Month(created_at) as month"))
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');
       
       
       $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);

       foreach($months as $index =>$month){
        $datas[$month] = $users[$index];
        //$data1[$month] = $appt[$index];
        }
        
     //  dd($data1);
       
        return view('livewire.statics.hospital.hr.chart-line', [
             "data" => json_encode( $datas ),
             //"data1" =>json_encode( $data1)
            ]);
           

    }
}
