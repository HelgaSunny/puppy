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

Route::get('/','PagesController@welcome');
Route::get('/login','PagesController@login');
Route::get('/pet','PagesController@pet');
Route::get('/owner','PagesController@owner');
Route::get('/about','PagesController@about');
Route::get('/dashboard','PagesController@dashboard');

Auth::routes(); //Authentication from Controllers\Auth

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('pets','PetsController');
