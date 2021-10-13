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

Route::get('/', 'Guest\GuestController@index');
Route::get('/about', 'Guest\GuestController@about')->name('guest.about');
Route::get('/program', 'Guest\GuestController@program')->name('guest.program');
Route::get('/contact', 'Guest\GuestController@contact')->name('guest.contact');
