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
Route::group(['prefix' => 'penduduk'], function(){
  Route::get('/','PendudukController@index')->name('penduduk');
  Route::get('/tambah','PendudukController@create')->name('penduduk.tambah');
  Route::post('/tambah','PendudukController@store')->name('penduduk.simpan');
  Route::get('/tampil/{penduduk}','PendudukController@show')->name('penduduk.tampil');
  Route::get('/edit/{penduduk}','PendudukController@edit')->name('penduduk.edit');
  Route::patch('/edit/{penduduk}','PendudukController@update')->name('penduduk.update');
  Route::patch('/hapus/{penduduk}','PendudukController@destroy')->name('penduduk.destroy');
});
Route::group(['prefix' => 'keluarga'], function(){
  Route::get('/','KeluargaController@index')->name('keluarga');
});
