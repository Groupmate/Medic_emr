<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth()->user()->role == 1){
            return view('federal.create_regionalbureau');
        }
        if(Auth()->user()->role == 2){
            return view('regional.dashboard');
        }
        if(Auth()->user()->role == 3){
            return view('zonal.dashboard');
        }
        if(Auth()->user()->role == 4){
            return view('doctors.dashboard');
        }
    }
}
