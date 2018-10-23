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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/register', 'HomeController@register')->name('register');
Route::post('/register', 'HomeController@addUser')->name('register');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
