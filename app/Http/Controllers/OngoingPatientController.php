<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OngoingPatientController extends Controller
{
    public function ongoing(){
        if(Auth::user()->role == 6){
            return view('hospital.doctor.ongoingpatients');
        }
        else{
            return view('error.custome-error');
        }
    }
}
