<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect(uri:'/', destination:'login');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified'
    ])->group(function () {
        Route::get('/create_regionalbureau', function () { return view('federal.create_regionalbureau'); })->name('create_regionalbureau');
        Route::get('/create_manager', function ()  {  return view('federal.create_manager');})->name('create_manager');
        Route::get('/profile', function ()  { return view('federal.profile'); })->name('profile');
        Route::get('/create_zonalbureau', function () { return view('regional.create_zonalbureau'); })->name('create_zonalbureau');
        Route::get('/create_zonalmanager', function ()  {  return view('regional.create_manager');})->name('create_zonalmanager');
        Route::get('/regionalprofile', function ()  { return view('regional.profile'); })->name('profileregionalbureau');
        Route::get('/create_hospital', function () { return view('zonal.create_hospital'); })->name('create_hospital');
        Route::get('/create_hospitalmanager', function ()  {  return view('zonal.create_manager');})->name('create_hospitalmanager');
        Route::get('/hospitalmanagerprofile', function ()  { return view('zonal.profile'); })->name('create_hospitalmanagerprofile');
        Route::get('/employee', function () { return view('hospital.hr.employee');})->name('employee');
        Route::get('/add_doctor', function () { return view('hospital.hr.adddoctor');})->name('adddoctor');
        Route::get('/viewemployee', function () {  return view('hospital.hr.viewemployee');})->name('viewemployee');
        Route::get('/patient', function () { return view('hospital.doctors.patient'); })->name('patient');
        Route::get('/home', function () { return view('hospital.doctors.home'); })->name('doctors.home');
        Route::get('/register_patient', function () { return view('hospital.reception.registerpatient'); })->name('patient.registerpatient');
        Route::get('/assign_patient', function () { return view('hospital.reception.assignpatient'); })->name('patient.assignpatient');
});
