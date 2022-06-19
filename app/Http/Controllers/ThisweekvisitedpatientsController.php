<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThisweekvisitedpatientsController extends Controller
{
    public function visited(){
        if(Auth::user()->role == 6){
            return view('hospital.doctor.thisweekvisitedpatients');
        }
        else{
            return view('error.custome-error');
        }
    }
}
