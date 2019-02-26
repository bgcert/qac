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

// Route::get('/', function () {
//     $pages = \App\Page::orderBy('priority', 'asc')->get();
//     return view('homepage', compact('pages'));
// });

Route::get('/', 'HomeController@index');

Route::view('/admin', 'pages.index');

Route::view('/services', 'services');
Route::view('/courses', 'courses');
Route::view('/contacts', 'contacts');
Route::view('/aboutus', 'aboutus');
// Route::get('/clients', 'ClientController@index');
// Route::get('/services/{slug}', 'ServiceController@show');

Route::view('/admin', 'pages.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('pages', 'PageController');

// Route::get('{slug}', 'PageController@show');

Route::namespace('Admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::view('/', 'admin.index');
        Route::resource('services', 'ServiceController');
        Route::resource('pages', 'PageController');
        Route::resource('slides', 'SlideController');
        Route::resource('clients', 'ClientController');
    });