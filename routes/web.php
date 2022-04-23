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
        Route::get('/create_manager', function () {  return view('federal.create_manager');})->name('create_manager');
        Route::get('/profile', function () { return view('federal.profile'); })->name('create_regionalbureau');
        Route::get('/employee', function () { return view('HR.employee');})->name('employee');
        Route::get('/viewemployee', function () {  return view('HR.viewemployee');})->name('viewemployee');
        Route::get('/patient', function () { return view('doctors.patient'); })->name('patient');
        Route::get('/home', function () { return view('doctors.home'); })->name('doctors.home');   
});
