<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IncomingReferController extends Controller
{
    public function incomingRefer(){
        if(Auth::user()->role == 5){
            return view('hospital.reception.incomingrefer');
        }
        else{
            return view('error.custome-error');
        }
    }
}
