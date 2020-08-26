<?php

use App\Http\Controllers\CheckHashController;
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

Route::post('/vote', 'VoteController@store')->name('vote.store');
Route::get('/vote', 'VoteController@index')->name('vote.index');
Route::post('/voted', 'VotedController@store')->name('voted.store');
Route::get('/voted', 'VotedController@index')->name('voted.index');
Route::get('/check', 'CheckHashController@index')->name('check.index');
Route::post('/hash', 'CheckHashController@show')->name('check.show');
