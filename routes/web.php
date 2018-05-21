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
Route::get('/profile', 'HomeController@profile');
Route::get('/profile/{employee}/delete', 'HomeController@delete');
Route::post('/employeesstore', 'HomeController@store');

Route::get('/update/{employee}','HomeController@update');
Route::get('/personalprofile','HomeController@showprofile');

Route::post('/recordsstore/{x}', 'HomeController@addrecord');
//Route::get('/postss', 'HomeController@posts');
Route::get('/posts', 'postcontroller@posts');
Route::get('/posts/{post}','postcontroller@getpost');

Route::post('/addpost', 'postcontroller@storepost');