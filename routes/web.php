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


Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::match(['GET', 'POST'], '/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/patients/create', 'PatientController@create')->name('patients.create');
Route::get('/patients/{patient}/edit', 'PatientController@edit')->name('patient.edit');
Route::get('/patients', 'PatientController@index')->name('patients.index');
Route::post('/patients', 'PatientController@store');
Route::patch('/patients/{patient}', 'PatientController@update')->name('patient.update');
Route::get('/patients/celebrants', 'CelebrantController@index')->name('celebrants');
Route::delete('/patients/{patient}', 'PatientController@destroy')->name('patient.destroy');
Route::get('/change-password', 'ChangePasswordController@index')->name('changepassword');
Route::patch('/change-password', 'ChangePasswordController@update')->name('password.update');