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
    return view('homepage');
    // return view('home');
});

Route::view('/services', 'services');
Route::view('/courses', 'courses');
Route::view('/contacts', 'contacts');
Route::view('/aboutus', 'aboutus');



Route::view('/admin', 'pages.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pages', 'PageController');
