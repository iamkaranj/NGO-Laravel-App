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

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    
    Route::resource('events','EventsController');
    Route::get('/event/datatable','EventsController@datatable')->name('events.datatable');
    Route::resource('equipments','EquipmentsController');
    Route::get('/equipment/datatable','EquipmentsController@datatable')->name('equipments.datatable');

    Route::get('/home', 'HomeController@index')->name('home');
    
});
Route::get('/donors', 'AjaxController@getDonorsByParam')->name('ajax.donor.data');

Route::group(['prefix' => 'address'], function (){
    Route::get('/postal-codes', 'AjaxController@postalCode')->name('address.postal');
    Route::get('/cities', 'AjaxController@cities')->name('address.cities');
    Route::get('slug/{slug}', 'AjaxController@address')->name('address.data');
});