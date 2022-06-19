<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreaeteDischargeController extends Controller
{
    public function discharge(){
        if(Auth::user()->role == 6){
            return view('hospital.doctor.create-discharge');
        }
        else{
            return view('error.custome-error');
        }
    }
}
