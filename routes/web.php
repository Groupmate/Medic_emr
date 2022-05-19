<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Eloquent;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::redirect(uri:'/', destination:'login');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified'
    ])->group(function () {
        // Federal level
        Route::get('/create_regionalbureau', function () { return view('federal.create_regionalbureau'); })->name('create_regionalbureau');
        Route::get('/create_manager', function ()  {  return view('federal.create_manager');})->name('create_manager');
        Route::get('/profile', function ()  { return view('federal.profile'); })->name('create_regionalbureau');

        //Regional level
        Route::get('/create_zonalbureau', function () { return view('regional.create_zonalbureau'); })->name('create_zonalbureau');
        Route::get('/create_zonalmanager', function ()  {  return view('regional.create_manager');})->name('create_zonalmanager');
        Route::get('/regionalprofile', function ()  { return view('regional.profile'); })->name('create_regionalbureau');

        //Zonal level
        Route::get('/create_hospital', function () { return view('zonal.create_hospital'); })->name('create_hospital');
        Route::get('/create_hospitalmanager', function ()  {  return view('zonal.create_hospital_manager');})->name('create_hospitalmanager');
        Route::get('/hospitalmanagerprofile', function ()  { return view('zonal.profile'); })->name('create_hospitalmanagerprofile');

        //Hospital or HealthCenter ->> HR Manager
        Route::get('/employee', function () { return view('hospital.hr.employee');})->name('employee');
        Route::get('/doctor', function () { return view('hospital.hr.doctor');})->name('doctor');
        Route::get('/viewemployee', function () {  return view('hospital.hr.viewemployee');})->name('viewemployee');
        Route::get('/bar-chart', function () { return view('hospital.hr.bar-chart');})->name('barchart');
        Route::get('/pie-chart', function () { return view('hospital.hr.pie-chart');})->name('piechart');
        Route::get('/pstatics', function () { return view('hospital.hr.pstatics');})->name('pstatics');

        //Hospital or HealthCenter ->> Dashboard
        Route::get('/patient', function () { return view('hospital.doctors.patient'); })->name('patient');
        Route::get('/home', function () { return view('hospital.doctors.home'); })->name('doctors.home');

        //Hospital or HealthCenter ->> Reception
        Route::get('/dash', function () { return view(' hospital.reception.dashboard'); })->name('doctors.dash');
        Route::get('/register_patient', function () { return view('hospital.reception.registerpatient'); })->name('patientRegister');
        Route::get('/viewpatients', function () { return view('hospital.reception.viewpatients'); })->name('viewreception');
        Route::get('/appointment', function () { return view('hospital.doctors.appointment'); })->name('doctors.home');

        //None
        Route::get('/viewpatient', function () { return view('hospital.reception.viewpatient'); })->name('viewreception');
        Route::get('/appointments', function () { return view('hospital.doctors.appointments'); })->name('appontiments');
        Route::get('/today', function () { return view('hospital.doctors.today-appointment'); })->name('today-appontiments');
});
