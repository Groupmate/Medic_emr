<?php

namespace App\Http\Livewire\Statics\Hospital\Hr;

use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;


class PieChart extends Component
{
    public function render()
    {
     
            $data['pieChart'] = Appointment::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                ->whereYear('created_at', date('Y'))
                ->groupBy('month_name')
                ->orderBy('count')
                ->get();
        
            return view('livewire.statics.hospital.hr.pie-chart', $data);
        }
}

	