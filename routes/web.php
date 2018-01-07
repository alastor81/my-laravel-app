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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();
Route::get('/','SchoolController@index')->name('home');
Route::post('/create-student','SchoolController@create')->name('create-student');
Route::post('/add-score','SchoolController@add')->name('add-score');
Route::get('/delete/{id}','SchoolController@delete')->name('delete');
Route::get('student/{id}','SchoolController@show')->name('student');
Route::get('student-api/{id}','SchoolController@show_api');
Route::get('/students','SchoolController@average')->name('show-students');
Route::get('/test','SchoolController@test');
Route::get('/show-all','SchoolController@show_all')->name('profiles');
Route::get('/create-pdf/{id}','SchoolController@create_pdf')->name('pdf');
