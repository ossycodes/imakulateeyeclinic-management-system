<?php

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

// Route::post('/test', 'PatientController@test');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/patients/create', 'PatientController@create')->name('patients.create');
Route::get('/patients', 'PatientController@index')->name('patients.index');
Route::post('/patients', 'PatientController@store');
