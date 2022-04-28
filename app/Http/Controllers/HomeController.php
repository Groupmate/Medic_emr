<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * 1, federal man
     * 2, regional man
     * 3, zone man
     * 4, HR  man
     * 5, Reception man
     * 6. Doctor man
     * 7.Other pages(Pharmacy and Lababratory)
     *
     * @return void
     */
    public function index()
    {
        if(Auth()->user()->role == 1){
            return view('federal.create_regionalbureau');
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
            return view('hospital.reception.registerPatient');
            
        }
        if(Auth()->user()->role == 6){
            return view('hospital.doctors.dashboard');
        }


    }
}
