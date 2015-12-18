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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@find');
Route::resource('animal', 'AnimalController');
Route::resource('holder', 'HolderController');
Route::resource('medication', 'MedicationController');

Route::resource('holder', 'HolderController');
Route::resource('holder', 'HolderController');
Route::resource('holder', 'HolderController');
Route::resource('animal', 'AnimalController');
Route::resource('medication', 'MedicationController');