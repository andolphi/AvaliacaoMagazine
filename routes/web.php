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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user','UserController@index')->name('admin.users');
Route::get('/adduser','UserController@create')->name('admin.formAddUser');
Route::post('/adduser','UserController@store')->name('admin.addUser');
Route::get('/edituser/{id}','UserController@edit')->name('admin.formEdtUser');
Route::post('/edituser/{id}','UserController@update')->name('admin.edtUser');
Route::get('/remuser/{id}','UserController@destroy')->name('admin.remUser');
