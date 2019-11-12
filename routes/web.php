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

Route::redirect('/', '/login');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::match(['GET', 'POST'], '/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard', 'DashboardController@index')->name('dashbaord');
Route::get('/patients/create', 'PatientController@create')->name('patients.create');
Route::get('/patients/{patient}/edit', 'PatientController@edit')->name('patient.edit');
Route::get('/patients', 'PatientController@index')->name('patients.index');
Route::post('/patients', 'PatientController@store');
Route::patch('/patients/{patient}', 'PatientController@update')->name('patient.update');
Route::get('/patients/celebrants', 'CelebrantController@index')->name('celebrants');
Route::delete('/patients/{patient}', 'PatientController@destroy')->name('patient.destroy');
Route::get('/change-password', 'ChangePasswordController@index')->name('changepassword');
Route::patch('/change-password', 'ChangePasswordController@update')->name('password.update');
Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('/patients/{patient}/relatedfiles/create', 'RelatedfileController@create')->name('relatedfile.create');
Route::get('/relatedfiles', 'RelatedfileController@index')->name('relatedfiles');
Route::post('/patients/{patient}/relatedfiles', 'RelatedfileController@store')->name('relatedfile.store');
Route::get('/relatedfiles/{patient}', 'RelatedfileController@show')->name('relatedfile.show');
Route::get('/relatedfile/{relatedfile}/edit', 'RelatedfileController@edit')->name('relatedfile.edit');
Route::patch('/relatedfile/{relatedfile}', 'RelatedfileController@update')->name("relatedfile.update");
Route::delete('/relaltedfile/{relatedfile}', 'RelatedfileController@destroy')->name('relatedfile.destroy');
Route::get('/notifications/markasread', 'MarkasReadNotificationController')->name('notification.markasread');
Route::get('/casefile/{patient}/create', 'CasefileController@create')->name('casefile.create');
Route::get('/casefiles', 'CasefileController@index')->name('casefile');
Route::post('/casefiles', 'CasefileController@store')->name('casefile.store');
Route::get('/casefiles/{casefile}/{patient}/edit', 'CasefileController@edit')->name('casefile.edit');
Route::get('/casefiles/{casefile}/{patient}', 'CasefileController@show')->name('casefile.show');
Route::patch('/casefiles/{casefile}/{patient}', 'CasefileController@update')->name('casefile.update');


//back up mysql file and send mail using 
Route::get('/sql/backup', function () {
    $exitCode = Artisan::call('mysqlbackupemail:send');
    //implement the command that would inturn back mysql database and send me an email of the mysql file
});
