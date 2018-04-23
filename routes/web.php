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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//omnia//
//receiption routes
Route::get('receiptionist','ReceptionistController@index')->name('receiptionist.index');
//-------------------------------------------------------------------------------------//

//floorroutes//
//floor routes
Route::get('floors','FloorController@index')->name('floors.index');
Route::get('floors/create','FloorController@create')->name('floors.create');
Route::post('floors/store','FloorController@store')->name('floors.store');
//--------------------------------------------------------//

