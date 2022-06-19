<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Patient_Waiting_List;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonImmutable;


class Thisweekvisitedpatients extends Component
{
    public function render()
    {
        $now = CarbonImmutable::now();
        $weekStartDate = $now->startOfWeek();
        $weekEndDate = $now->endOfWeek();
        $patientVisited = Patient_Waiting_List::whereDate('created_at','>=', $weekStartDate)->whereDate('created_at', '<=', $weekEndDate)->where('user_id', Auth::user()->id)->where('status','examined')->get();
        // dd($patientVisited);
        $totalPatient  = Patient_Waiting_List::whereDate('created_at','>=', $weekStartDate)->whereDate('created_at', '<=', $weekEndDate)->where('user_id', Auth::user()->id)->where('status','examined')->count();
        $patientID = DB::select('select * from patients');
        // dd($now);
        // dd($weekStartDate);
        // dd($totalPatient);
        // dd($weekEndDate);
        // dd($patientID);
        return view('livewire.hospital.doctor.thisweekvisitedpatients', ['patientID'=>$patientID], compact('totalPatient'))->with('patientVisited', $patientVisited);
    }
}
