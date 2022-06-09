<?php

namespace App\Http\Livewire\Statics;

use Livewire\Component;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class LineChart extends Component
{
    public function render()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
                ->where('organization_id', 3)
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
        $months = User::select(DB::raw("Month(created_at) as month"))
                ->where('organization_id', 3)
                ->whereYear("created_at",date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');
        $doctors = Doctor::leftJoin('users', 'doctors.user_id', '=', 'users.id')
                ->select(DB::raw("COUNT(*) as count"))
                ->whereYear("doctors.created_at",date('Y'))
                ->groupBy(DB::raw("Month(doctors.created_at)"))
                ->pluck('count');
        $month =Doctor::leftJoin('users', 'doctors.user_id', '=', 'users.id')
                ->select(DB::raw("Month(doctors.created_at) as month"))
                ->whereYear("doctors.created_at",date('Y'))
                ->groupBy(DB::raw("Month(doctors.created_at)"))
                ->pluck('month');

       $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
       $data1 = array(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
       'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
       foreach($months as $index =>$month){
        $datas[$month] = $users[$index];
        }
        // foreach($month as $key =>$value){
        //     $data1[$value] = $users[$index];
        //     }
        // dd($data1 );
        return view('livewire.statics.line-chart', [
            "data" => json_encode( $datas ),
           ]);
          
    }
}
