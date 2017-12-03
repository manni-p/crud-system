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

Route::get('/', 'ResultController@index')->name('home');
Route::get('loadmore', 'ResultController@load')->name('loadmore');

Route::get('create', 'crudController@form')->name('form');
Route::post('create', 'crudController@create')->name('create');

Route::get('list', 'crudController@index')->name('list');


Route::get('delete/{id}', 'crudController@delete')->name('delete');

