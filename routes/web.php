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

Route::get('/create-dummy', 'CreateDummy@generate');
Route::get('/get-dummy', 'CreateDummy@get');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('doctor', DoctorController::class);

Route::get('doctor-dashboard',function(){
    return view('pages.doctor-dashboard.index');
});

Route::get('hospital-dashboard',function(){
    return view('pages.hospital-dashboard.index');
});

Route::get('patient-dashboard',function(){
    return view('pages.patient-dashboard.index');
});

Auth::routes();
