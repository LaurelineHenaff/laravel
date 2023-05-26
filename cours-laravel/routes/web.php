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

Route::get('/', function () {return view('home');})->name('home');
Route::get('bonjour/{nom}', 'WelcomeController@bonjouravecnom')->name('hello');
Route::get('bonjourbis', 'WelcomeController@bonjouravecnombis')->name('welcome')->middleware('basicauth'); // <--- ici !
Route::get('employes', 'EmployeController@all')->name('employes.all');
Route::get('employes/find', 'EmployeController@find')->name('employes.find');
Route::get('employes/store', 'EmployeController@store')->name('employes.store');
Route::get('competences', 'CompetenceController@all')->name('competences.all');
Route::get('competences/find', 'CompetenceController@find')->name('competences.find');
Route::get('competences/store', 'CompetenceController@store')->name('competences.store');
