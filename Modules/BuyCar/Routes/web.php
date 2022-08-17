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

//Route::prefix('buycar')->group(function() {
//    Route::get('/', 'BuyCarController@index');
//
//});
Route::get('/','HomeController@index')->name('home');
Route::get('/cars','CarsController@index')->name('cars');
Route::get('/car/{id}','CarsController@show')->name('car');

Route::get('/reviews','ReviewsController@index')->name('reviews');
Route::get('/review/{id}','ReviewsController@show')->name('review');
Route::get('/newcars','NewCarsController@index')->name('newcars');
Route::get('/getmodel/{id}','FilterController@show')->name('getmodel');
