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

Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/beranda', 'AdminController@index')->name('home');
Route::get('/keluarga','FamilyController@index')->name('family');
Route::get('/penduduk','PersonController@index')->name('person');
