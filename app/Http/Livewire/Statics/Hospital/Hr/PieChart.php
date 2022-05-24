<?php
namespace App\Http\Livewire\Statics\Hospital\Hr;


use Livewire\Component;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class PieChart extends Component
{
    public function render()
    {
        // $data1[]=Patient::select AccountID, RuleName, COUNT(1) as COUNT
        //         FROM tbl
        //         GROUP BY AccountID, RuleName;
        //select count(disease) as no_disease from medical_datas left join hospitals on hospitals.region = hospitals.region;
     
            $data['pieChart'] = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                ->whereYear('created_at', date('Y'))
                ->groupBy('month_name')
                ->orderBy('count')
                ->get();
        
            return view('livewire.statics.hospital.hr.pie-chart', $data);
        }
}


