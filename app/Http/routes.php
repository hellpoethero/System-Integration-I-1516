<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@authenticate');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'PageController@dashboard']);
Route::get('health4all', 'PageController@health4all');
Route::get('chikitsa', 'PageController@chikitsa');

Route::get('patient/create', ['middleware' => 'auth', 'uses' => 'PatientController@create']);
Route::get('patient', ['middleware' => 'auth', 'uses' => 'PatientController@index']);

Route::group(['middleware' => 'auth', 'prefix' => 'patient'], function() {
    Route::get('', 'PatientController@index');
    Route::get('add', 'PatientController@create');
    Route::get('inquiry', 'PatientController@inquiry');
    Route::get('inquiry/add', 'PatientController@add_inquiry');
});

Route::group(['middleware' => 'auth', 'prefix' => 'staff'], function() {
    Route::get('', 'StaffController@index');
    Route::get('add', 'StaffController@create');
    Route::get('role', 'StaffController@role');
    Route::get('role/add', 'StaffController@add_role');
    Route::get('category', 'StaffController@category');
    Route::get('category/add', 'StaffController@add_category');
});

Route::group(['middleware' => 'auth', 'prefix' => 'dicom'], function() {
    Route::get('', 'DicomController@index');
    Route::get('add', 'DicomController@create');
    Route::get('{id}', 'DicomController@show');
});