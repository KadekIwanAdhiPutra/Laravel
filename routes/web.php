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

//Route :: get('/karyawan','KaryawanController@index');//
Route :: resource ('karyawan','KaryawanController');


Route :: resource ('ppl','PplController');

Auth::routes();

Route::get('/home', 'KaryawanController@index')->name('home');
