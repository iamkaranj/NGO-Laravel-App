<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::group(['prefix' => 'donation'], function () {
//     Route::get('/', function () {
//         dd('This is the Donation module index page. Build something great!');
//     });
// });

Route::resource('donations', 'DonationsController');
Route::get('/donation/datatable','DonationsController@datatable')->name('donation.datatable');
Route::get('/donation/receipt/{id}','DonationsController@printReceipt')->name('donation.print');
