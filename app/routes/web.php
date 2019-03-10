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

Route::get('airports', 'PagesController@getAirportsPage');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('intro', 'PagesController@getIntro');


Route::get('API/airports', 'PagesController@getAirports');
Route::get('API/airport/{airport_code}', 'PagesController@getAirport');
Route::get('API/carriers', 'PagesController@getCarriers');
Route::get('API/carrier/{carrier_code}', 'PagesController@getCarrier');
Route::get('API/airport/{airport_code}/carriers', 'PagesController@getCarriersAtAirport');
Route::get('API/carrier/{carrier_code}/statistics/flights', 'PagesController@getCarrierStatistics');
Route::post('API/carrier/{carrier_code}/statistics/flights', 'PagesController@postCarrierStatistics');
Route::delete('API/carrier/{carrier_code}/statistics/flights', 'PagesController@deleteCarrierStatistics');
Route::put('API/carrier/{carrier_code}/statistics/flights', 'PagesController@putCarrierStatistics');
Route::get('API/carriers/statistics/minutes_delayed', 'PagesController@getCarriersStatisticsMinutes');
Route::get('API/carriers/statistics/delays', 'PagesController@getCarriersStatisticsDelays');
Route::get('API/carrier/{carrier_code}/statistics/delays', 'PagesController@getCarrierStatisticsDelays');
