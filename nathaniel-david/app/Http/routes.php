<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('services', function () {
    return view('services');
});

Route::get('process', function () {
    return view('process');
});

Route::get('reviews', function () {
    return view('reviews');
});

Route::get('/quotes', [
    'middleware' => 'auth',
    'uses' => 'QuotesController@index'
]);

Route::get('thankyou', 'QuotesController@thankyou');
Route::resource('quote', 'QuotesController');
Route::get('quote', 'QuotesController@create');
Route::post('quote', 'QuotesController@store');

Route::auth();

