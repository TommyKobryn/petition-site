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

Route::get('/', function () {
    return view('index');
});

Route::auth();

// routing for admin user
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');



Route::get('home', 'HomeController@index');
Route::get('petitions', 'PetitionController@index');
Route::get('petitions/{petition}', 'PetitionController@show');
Route::delete('petitions/{petition}', 'PetitionController@destroy')->name('petitions.destroy');
Route::post('petitions', 'PetitionController@store');

//add the new signature under petition
Route::post('petitions/{petition}/signatures', 'SignaturesController@store');
//create api for signatures
Route::get('api/petitions/{petition}/signatures', 'SignaturesController@api');
Route::get('api/petitions', 'PetitionController@api');
