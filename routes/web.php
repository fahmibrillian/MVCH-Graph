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

Route::get('/create-dummy', 'CreateDummy@generate'); //->middleware('auth');
Route::get('/create-user', 'CreateDummy@create_user'); //->middleware('auth');

// group middleware auth
Route::group(['middleware' => ['auth']], function () {

    Route::get('/get-dummy', 'CreateDummy@get'); //->middleware('auth');

    Route::get('/home', 'HomeController@index')->name('home');

    // Management Data Physicians
    Route::resource('doctor', DoctorController::class); //->middleware('auth');

    // Management Data Employees
    Route::resource('employee', EmployeeController::class); //->middleware('auth');

    // Management Data Patients
    Route::resource('patient', PatientController::class); //->middleware('auth);

    // Management Data Diagnosis and Diagnose Patient
    Route::resource('diagnosis', DiagnoseController::class); //->middleware('auth);
    Route::post('addDiagnosis', 'DiagnoseController@store'); //->middleware('auth');
    Route::post('{id}/updateDiagnosis', 'DiagnoseController@update'); //->middleware('auth');
    Route::get('{id}/deleteDiagnosis', 'DiagnoseController@destroy'); //->middleware('auth');
    Route::get('diagnose', 'DiagnoseController@diagnose');
    Route::post('addDiagnose', 'DiagnoseController@addDiagnose');

    // Management Data Visitations
    Route::resource('visit', VisitController::class); //->middleware('auth');
    Route::post('addVisit', 'VisitController@store'); //->middleware('auth');
    Route::post('{id}/updateVisit', 'VisitController@update'); //->middleware('auth');
    Route::get('{id}/deleteVisit', 'VisitController@destroy'); //->middleware('auth');


    // Management Data Work Units and Care Centers
    Route::resource('workunit', WorkUnitController::class); //->middleware('auth');
    Route::post('addWorkUnit', 'WorkUnitController@store'); //->middleware('auth');
    Route::post('{id}/updateWorkUnit', 'WorkUnitController@update'); //->middleware('auth');
    Route::get('{id}/deleteWorkUnit', 'WorkUnitController@destroy'); //->middleware('auth');
    Route::resource('carecenter', CareCenterController::class); //->middleware('auth');
    Route::post('addCareCenter', 'CareCenterController@store'); //->middleware('auth');
    Route::post('{id}/updateCareCenter', 'CareCenterController@update'); //->middleware('auth');
    Route::get('{id}/deleteCareCenter', 'CareCenterController@destroy'); //->middleware('auth');

    Route::get('doctor-dashboard', function () {
        return view('pages.doctor-dashboard.index'); //->middleware('auth');
    })->name('doctor-dashboard');

    Route::get('hospital-dashboard', function () {
        return view('pages.hospital-dashboard.index'); //->middleware('auth');
    })->name('hospital-dashboard');

    Route::get('patient-dashboard', function () {
        return view('pages.patient-dashboard.index'); //->middleware('auth');
    });
});

Auth::routes();
