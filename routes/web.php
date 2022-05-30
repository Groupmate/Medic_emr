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
        Route::get('/patient', function () { return view('hospital.doctors.patient'); })->name('patient');
        Route::get('/home', function () { return view('hospital.doctors.home'); })->name('doctors.home');
         //Hospital or HealthCenter ->> Reception
        Route::get('/register_patient', function () { return view('hospital.reception.registerpatient'); })->name('patient.registerpatient');
        Route::get('/assign_patient', function () { return view('hospital.reception.assignpatient'); })->name('patient.assignpatient');
       
        Route::get('/block', function () { return view('hospital.hr.block');})->name('block');
        Route::get('/listblock', function () { return view('hospital.hr.listblock');})->name('listblock');
        Route::get('/listroom', function () { return view('hospital.hr.listroom');})->name('listroom');
        Route::get('/listbed', function () { return view('hospital.hr.listbed');})->name('listbed');
        Route::get('/room', function () { return view('hospital.hr.room');})->name('room');
        Route::get('/bed', function () { return view('hospital.hr.bed');})->name('bed');
        Route::get('/bedassignment', function () { return view('hospital.hr.bedassignment');})->name('bedassignment');
        Route::get('/appointments', function () { return view('hospital.doct.appointments'); })->name('appontiments');
        Route::get('/todayappointments', function () { return view('hospital.doct.today-appointment'); })->name('today-appontiments');
        //Statics
        Route::get('/fstatics', function () { return view('Statics.Fstatics'); })->name('Federal_Statics');
        Route::get('/hstatics', function () { return view('Statics.Hrstatics'); })->name('HR_Statics');
        Route::get('/linechart', function () { return view('Statics.Linechart'); })->name('Hospital_linechrt');
        Route::get('/piechart', function () { return view('Statics.Piechart'); })->name('Hospital_piechart');
        Route::get('/Hpstatics', function () { return view('Statics.Hospitalstatics'); })->name('Hospital_Statics');

});
