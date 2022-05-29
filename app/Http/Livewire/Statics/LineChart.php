<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LineChart extends Component
{
    public function render()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
       
        // $appt = Appointment::select(DB::raw("COUNT(*) as count"))
        //         ->whereYear("created_at",date('Y'))
        //         ->groupBy(DB::raw("Month(created_at)"))
        //         ->pluck('count');
                 
        $months = User::select(DB::raw("Month(created_at) as month"))
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');
       
       $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
       foreach($months as $index =>$month){
        
        $datas[$month] = $users[$index];

        }
       // dd($datas );
        return view('livewire.statics.line-chart', [
            "data" => json_encode( $datas ),
           ]);
          
    }
}
