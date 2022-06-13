<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\hospital\Doctor\Generatemedicaldata;


Route::redirect(uri:'/', destination:'login');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified'
    ])->group(function () {
        // Federal level    
        Route::get('/fdash', function ()  { return view('federal.dashboard'); })->name('fed_dashboard');
        Route::get('/create_regionalbureau', function () { return view('federal.create_regionalbureau'); })->name('create_regionalbureau');
        Route::get('/create_manager', function ()  {  return view('federal.create_manager');})->name('create_manager');
        Route::get('/profile', function ()  { return view('federal.profile'); })->name('profile');
        //Regional level
        Route::get('/create_zonalbureau', function () { return view('regional.create_zonalbureau'); })->name('create_zonalbureau');
        Route::get('/create_zonalmanager', function ()  {  return view('regional.create_manager');})->name('create_zonalmanager');
        Route::get('/regionalprofile', function ()  { return view('regional.profile'); })->name('profileregionalbureau');
        //Zonal level
        Route::get('/create_hospital', function () { return view('zonal.create_hospital'); })->name('create_hospital');
        Route::get('/create_hospitalmanager', function ()  {  return view('zonal.create_manager');})->name('create_hospitalmanager');
        Route::get('/hospitalmanagerprofile', function ()  { return view('zonal.profile'); })->name('create_hospitalmanagerprofile');
        //Hospital or HealthCenter ->> HR Manager
        Route::get('/employee', function () { return view('hospital.hr.employee');})->name('employee');
        Route::get('/add_doctor', function () { return view('hospital.hr.adddoctor');})->name('adddoctor');
        Route::get('/viewemployee', function () {  return view('hospital.hr.viewemployee');})->name('viewemployee');
        //Hospital or HealthCenter ->> Dashboard
        Route::get('/patient', function () { return view('hospital.doctor.patient'); })->name('patient');
        Route::get('/home', function () { return view('hospital.doctor.home'); })->name('doctor.home');
         //Hospital or HealthCenter ->> Reception
        Route::get('/register_patient', function () { return view('hospital.reception.registerpatient'); })->name('patient.registerpatient');
        Route::get('/assign_patient', function () { return view('hospital.reception.assignpatient'); })->name('patient.assignpatient');
        Route::get('/receptionprofile', function ()  { return view('hospital.reception.profile'); })->name('proreceptionbureau');
        Route::get('/block', function () { return view('hospital.hr.block');})->name('block');
        Route::get('/listblock', function () { return view('hospital.hr.listblock');})->name('listblock');
        Route::get('/listroom', function () { return view('hospital.hr.listroom');})->name('listroom');
        Route::get('/listbed', function () { return view('hospital.hr.listbed');})->name('listbed');
        Route::get('/room', function () { return view('hospital.hr.room');})->name('room');
        Route::get('/bed', function () { return view('hospital.hr.bed');})->name('bed');
        Route::get('/bedassignment/{id}', function ($id) { return view('hospital.doctor.bedassignment', ['id' => $id]);})->name('bedassignment');
        //Doctor
        Route::get('/appointments/{id}', function ($id) { return view('hospital.doctor.appointments', ['id' => $id]);})->name('appointments');
        Route::get('/assignedpatients', function () { return view('hospital.doctor.assignedpatients'); })->name('assignedpatients');
        Route::get('/todayappointments', function () { return view('hospital.doctor.today-appointment'); })->name('today-appointments');
       // Route::get('/calender', function () { return view('hospital.doctor.calender'); })->name('calender');
       
        Route::get('/prescribe-medicaldrug/{id}', function ($id) { return view('hospital.doctor.prescribe-medicaldrug', ['id' => $id]); })->name('prescribe-medicaldrug');
        Route::get('/create-discharge/{id}', function ($id){ return view('hospital.doctor.create-discharge', ['id' => $id]); })->name('create-discharge');
        Route::get('/generatemedicaldata/{id} ', function ($id) { return view('hospital.doctor.generatemedicaldata', ['id' => $id]); })->name('generatemedicaldata');
        Route::get('/referpatient/{id}', function($id) { return view('hospital.doctor.refer-patient', ['id' => $id]); })->name('refer-patient');
        Route::get('/medcertificate/{id}', function($id) { return view('hospital.doctor.generatemedicalcertificate', ['id' => $id]); })->name('medical certificate');
        //Statics 
        Route::get('/fstatics', function () { return view('Statics.Fstatics'); })->name('Federal_Statics');
        Route::get('/hstatics', function () { return view('Statics.Hrstatics'); })->name('HR_Statics');
        Route::get('/linechart', function () { return view('Statics.Linechart'); })->name('Hospital_linechrt');
        Route::get('/piechart', function () { return view('Statics.Piechart'); })->name('Hospital_piechart');
        Route::get('/Hpstatics', function () { return view('Statics.Hospitalstatics'); })->name('Hospital_Statics');
        //pharmacy
        Route::get('/Pdashboard', function () { return view('hospital.pharmacy.dashboard'); })->name('dashboard');
        Route::get('/medical-drug', function () { return view('hospital.pharmacy.add-medical-drug'); })->name('add-medical-drug');
        Route::get('/issue-drug', function () { return view('hospital.pharmacy.issue-drug'); })->name('issue-drug');
        Route::get('/Pprofile', function () { return view('hospital.pharmacy.profile'); })->name('pharmacyprofile');

});
