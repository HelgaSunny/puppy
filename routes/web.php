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

Route::get('/','PagesController@home');
Route::get('/login','PagesController@login');
Route::get('/pet','PagesController@pet');
Route::get('/owner','PagesController@owner');
Route::get('/about','PagesController@about');

Auth::routes(); //Authentication from Controllers\Auth

Route::get('/home', 'HomeController@index')->name('home');
