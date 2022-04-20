<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
 // create federal organization
    Route::get('/create_regionalbureau', function () {
        return view('federal.create_regionalbureau');
    })->name('create_regionalbureau');
    Route::get('/profile', function () {
        return view('federal.profile');
    })->name('create_regionalbureau');
    Route::get('/dashboard1', function () {
        return view('federal.dashboard1');
    })->name('dashboard1');
// create regional organization
    Route::get('/create_zonalbureau', function () {
        return view('regional.create_zonalbureau');
    })->name('create_zonalbureau');
// create Zonal organization
    Route::get('/create_woredabureau', function () {
        return view('zonal.create_woredabureau');
    })->name('create_woredabureau');
//-----------------------------------------------------------//
    Route::get('/employee', function () {
        return view('HR.employee');
    })->name('employee');
    
    Route::get('/viewemployee', function () {
        return view('HR.viewemployee');
    })->name('viewemployee');
    
});
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::redirect(uri:'/', destination:'login');
Route::middleware(['auth:sanctum', 'verified'])->get('/patient', function () {
    return view('doctors.patient');
})->name('patient');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/home', 'doctors.home')->name('doctors.home');
});