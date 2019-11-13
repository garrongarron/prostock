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
Route::get('/locations', 'HomeController@locations')->name('locations');
Route::get('/batchs', 'HomeController@batchs')->name('batchs');
Route::get('/items', 'HomeController@items')->name('items');
Route::get('/transactions', 'HomeController@transactions')->name('transactions');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
