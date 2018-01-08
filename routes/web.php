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

// Get request that call the respective functions within the ViewController to return views/pages
Route::get('/', 'ViewController@home');
Route::get('/recent', 'ViewController@recent');
Route::get('/top10', 'ViewController@top10');

// Convert the integer to Roman Numeral and store to database
Route::post('/convert', 'ConvertController@toRomanNumerals');