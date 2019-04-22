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
Route::view('/standarti', 'standarti');

Route::get('/', 'PublicController@index')->name('homepage');
Route::get('/za-nas', 'PublicController@aboutPage')->name('about');
Route::get('/kontakti', 'PublicController@contactPage')->name('contact');
Route::get('/standarti', 'PublicController@standardsPage')->name('standarti');
// Route::view('/kontakti', 'contacts');
// Route::view('/za-nas', 'za-nas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Inquiry
Route::view('/inquiry', 'partials.inquiry-sent');
Route::post('inquiry', ['as' => 'inquiry.store', 'uses' => 'InquiryController@store']);