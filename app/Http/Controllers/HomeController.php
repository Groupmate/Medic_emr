<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * 1, federal man
     * 2, regional man
     * 3, city man
     * 4, zone man
     * 5, hospital man
     *
     * @return void
     */
    public function index()
    {
        if(Auth()->user()->role == 1){
            return view('federal.dashboard');
        }
        if(Auth()->user()->role == 2){
            return view('regional.create_zonalbureau');
        }
        if(Auth()->user()->role == 3 ){
            return view('zonal.create_hospital');
        }
        if(Auth()->user()->role == 4){
            return view('hospital.hr.dashboard');
        }
        if(Auth()->user()->role == 5){
            return view('hospital.reception.assignpatient');
        }
        if(Auth()->user()->role == 6){
            return view('hospital.doctor.dashboard');
        }
        if(Auth()->user()->role == 7){
            return view('hospital.pharmacy.dashboard');
        }
    }
}
