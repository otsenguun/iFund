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
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/startups', 'StartupsController@index')->name('startups');
Route::get('/regmaster', 'RegmasterController@index')->name('regmaster');
Route::get('/registers', 'RegistersController@index')->name('registers');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profiles', 'ProfileController@indexs')->name('profiles');
