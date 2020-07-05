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

Route::group(['middleware' => 'auth'], function(){
    
    Route::resource('events','EventsController');
    Route::resource('equipments','EquipmentsController');

    Route::get('/home', 'HomeController@index')->name('home');
    
});
Route::group(['prefix' => 'address'], function (){
    Route::get('/postal-codes', 'AjaxController@postalCode')->name('address.postal');
    Route::get('/cities', 'AjaxController@cities')->name('address.cities');
    Route::get('slug/{slug}', 'AjaxController@address')->name('address.data');
});
Route::get('/donors', 'AjaxController@getDonorsByParam')->name('ajax.donor.data');



