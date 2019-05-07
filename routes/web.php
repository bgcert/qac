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

// Redirects
Route::redirect('/course.php', '/', 301);
Route::redirect('/courses.php', '/', 301);
Route::redirect('/services.php', '/', 301);
Route::redirect('/standarts.php', '/standarti', 301);
Route::redirect('/request.php', '/', 301);
Route::redirect('/news.php', '/', 301);



Route::view('/responsive', 'responsive');
Route::view('/standarti', 'standarti');
Route::view('/za-nas', 'za-nas');
Route::view('/kontakti', 'contacts');
Route::view('/markirovka-ce', 'markirovka');

Route::get('/', 'PublicController@index')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Inquiry
Route::view('/inquiry', 'partials.inquiry-sent');
Route::post('inquiry', ['as' => 'inquiry.store', 'uses' => 'InquiryController@store']);
Route::post('recaptcha', 'InquiryController@recaptcha');