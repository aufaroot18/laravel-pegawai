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

Route::get('/', 'PegawaiController@index');

Route::prefix('pegawai')->group(function() {
	Route::get('/', 'PegawaiController@index')->name('index');
	Route::get('create', 'PegawaiController@create')->name('create');
	Route::post('store', 'PegawaiController@store')->name('store');
	Route::get('{id}/edit', 'PegawaiController@edit')->name('edit');
	Route::put('update', 'PegawaiController@update')->name('update');
	Route::delete('{id}/destroy', 'PegawaiController@destroy')->name('destroy');
	Route::get('search', 'PegawaiController@search')->name('search');
});