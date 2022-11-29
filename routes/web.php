<?php

use Illuminate\Support\Facades\Route;

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

// Route / redirect to /login if not logged in
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/create-dummy', 'CreateDummy@generate');//->middleware('auth');
Route::get('/get-dummy', 'CreateDummy@get');//->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

// Management Data Physicians
Route::resource('doctor', DoctorController::class);//->middleware('auth');

// Management Data Employees
Route::resource('employee', EmployeeController::class);//->middleware('auth');

// Management Data Patients and Diagnoses
Route::resource('patient', PatientController::class);//->middleware('auth);

// Management Data Visitations
Route::resource('visit', VisitController::class);//->middleware('auth');

// Management Data Work Units and Care Centers
Route::resource('workunit', WorkUnitController::class);//->middleware('auth');

Route::get('doctor-dashboard',function(){
    return view('pages.doctor-dashboard.index');//->middleware('auth');
});

Route::get('hospital-dashboard',function(){
    return view('pages.hospital-dashboard.index');//->middleware('auth');
});

Route::get('patient-dashboard',function(){
    return view('pages.patient-dashboard.index');//->middleware('auth');
});

Auth::routes();
