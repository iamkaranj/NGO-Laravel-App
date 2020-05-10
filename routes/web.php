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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/donation', function() {
    return view('add-donation');
})->name('donation')->middleware('auth');


Route::get('/view-donations', function() {
    return view('view-donations');
})->name('view-donation')->middleware('auth');

Route::get('/equipment', function() {
    return view('add-equipment');
})->name('equipment')->middleware('auth');

Route::get('/view-equipments', function() {
    return view('view-equipments');
})->name('view-equipments')->middleware('auth');

Route::get('/event', function() {
    return view('add-event');
})->name('event')->middleware('auth');

Route::get('/view-events', function() {
    return view('view-events');
})->name('view-events')->middleware('auth');
