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

//     // return new App\Mail\Thanks;
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/photos', 'PagesController@photos')->name('photos');
Route::get('/getimages', 'PagesController@getImages')->name('getImages');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/quote', 'quote')->name('quote');


Route::post('/send', 'SendMailController@send')->name('send');

Route::post('/subscribe', 'MailChimpController@subscribe')->name('subscribe');
