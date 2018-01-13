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
Route::get('/test', function (){
    return view('layouts.app');
});

Auth::routes();
Route::get('/', 'SchoolController@index')->name('home');

Route::post('/create-student', 'SchoolController@create')->name('create-student');

Route::get('/delete/{id}', 'SchoolController@delete')->name('delete');
Route::get('/student/{id}', 'ScoreController@index')->name('student');
Route::get('/students', 'ScoreController@show')->name('show-students');

Route::get('/student-api/{id}', 'SchoolController@show_api');



Route::get('/show-all', 'SchoolController@show')->name('profiles');




Route::get('/create-pdf/{id}', 'SchoolController@create_pdf')->name('pdf');


Route::get('/create-class', 'ClassRoomsController@index')->name('create_class');
Route::post('/c-class', 'ClassRoomsController@create')->name('c_class');


Route::get('/show-lessons', 'LessonsController@index')->name('add_lesson_form');
Route::post('/add-lesson', 'LessonsController@add')->name('add_lesson');


Route::post('/add-score', 'ScoreController@add')->name('add-score');
