<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OngoingPatientController;
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
        Route::get('/availabledoctors', function () { return view('hospital.reception.availabledoctors'); })->name('patient.availabledoctors');
        Route::get('/receptionprofile', function ()  { return view('hospital.reception.profile'); })->name('proreceptionbureau');
        Route::get('/block', function () { return view('hospital.hr.block');})->name('block');
        Route::get('/listblock', function () { return view('hospital.hr.listblock');})->name('listblock');
        Route::get('/listroom', function () { return view('hospital.hr.listroom');})->name('listroom');
        Route::get('/listbed', function () { return view('hospital.hr.listbed');})->name('listbed');
        Route::get('/room', function () { return view('hospital.hr.room');})->name('room');
        Route::get('/bed', function () { return view('hospital.hr.bed');})->name('bed');
        Route::get('/bedassignment/{id}', function ($id) { return view('hospital.doctor.bedassignment', ['id' => $id]);})->name('bedassignment');
        Route::get('/incomingrefer', 'App\Http\Controllers\IncomingReferController@incomingRefer')->name('incoming-refer');        
        //Doctor
        Route::middleware(['doctor'])->group(function(){
            Route::get('/appointments/{id}', function ($id) { return view('hospital.doctor.appointments', ['id' => $id]);})->name('appointments');
            Route::get('/assignedpatients', function () { return view('hospital.doctor.assignedpatients'); })->name('assignedpatients');
            Route::get('/ongoingpatients', 'App\Http\Controllers\OngoingPatientController@ongoing')->name('ongoingpatients');
            Route::get('/thisweekvisitedpatients', 'App\Http\Controllers\ThisweekvisitedpatientsController@visited')->name('thisweekvisitedpatients');
            Route::get('/todayappointments', function () { return view('hospital.doctor.today-appointment'); })->name('today-appointments'); 
            Route::get('/prescribe-medicaldrug/{id}', function ($id) { return view('hospital.doctor.prescribe-medicaldrug', ['id' => $id]); })->name('prescribe-medicaldrug');
            Route::get('/generatemedicaldata/{id} ', function ($id) { return view('hospital.doctor.generatemedicaldata', ['id' => $id]); })->name('generatemedicaldata');
            Route::get('/viewpatienthistory/{id} ', function ($id) { return view('hospital.doctor.viewpatienthistory', ['id' => $id]); })->name('viewpatienthistory');
            Route::get('/requestexaminationtest/{id} ', function ($id) { return view('hospital.doctor.requestexaminationtest', ['id' => $id]); })->name('requestexaminationtest');
            Route::get('/referpatient/{id}', function($id) { return view('hospital.doctor.refer-patient', ['id' => $id]); })->name('refer-patient');
            Route::get('/medcertificate/{id}', function($id) { return view('hospital.doctor.generatemedicalcertificate', ['id' => $id]); })->name('medical certificate');
            Route::get('/create-discharge', 'App\Http\Controllers\CreaeteDischargeController@discharge')->name('create-discharge');
        });
        //Statics 
        Route::get('/fstatics', function () { return view('Statics.Fstatics'); })->name('Federal_Statics');
        Route::get('/hstatics', function () { return view('Statics.Hrstatics'); })->name('HR_Statics');
        Route::get('/linechart', function () { return view('Statics.Linechart'); })->name('Hospital_linechrt');
        Route::get('/piechart', function () { return view('Statics.Piechart'); })->name('Hospital_piechart');
        Route::get('/Hpstatics', function () { return view('Statics.Hospitalstatics'); })->name('Hospital_Statics');
        //pharmacy
        Route::get('/Pdashboard', function () { return view('hospital.pharmacy.dashboard'); })->name('pharmacy_dashboard');
        Route::get('/medical-drug', function () { return view('hospital.pharmacy.add-medical-drug'); })->name('add-medical-drug');
        Route::get('/issue-drug', function () { return view('hospital.pharmacy.issue-drug'); })->name('issue-drug');
        Route::get('/Pprofile', function () { return view('hospital.pharmacy.profile'); })->name('pharmacyprofile');
         //pharmacy
        Route::get('/Ldashboard', function () { return view('hospital.laboratory.dashboard'); })->name('laboratory_dashboard');

});
