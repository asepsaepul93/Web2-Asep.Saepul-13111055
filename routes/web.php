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
Route::get('/','viewcontroller@home'); 
Route::get('/add','viewcontroller@tambah'); 
Route::post('tambah','viewcontroller@add_action');	
Route::get('/edit/{id}','viewcontroller@ubah');
Route::post('/edit/update/{id}','viewcontroller@update');
Route::get('/delete/{id}','viewcontroller@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
