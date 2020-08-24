<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::post('/vote', 'VoteController@store');
Route::get('/vote', 'VoteController@index');
Route::post('/voted', 'VotedController@store');
Route::get('/voted', 'VotedController@index');
