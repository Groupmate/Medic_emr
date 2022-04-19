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
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/create_regionalbureau', function () {
        return view('federal.create_regionalbureau');
    })->name('create_regionalbureau');

    
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