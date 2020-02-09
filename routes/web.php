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

Route::get('/', 'AnimalController@showAll');

Route::get('create', 'AnimalController@create');

Route::post('add_animal', 'AnimalController@addAnimal');

Route::get('edit/{id}', 'AnimalController@edit');

Route::post('update_animal', 'AnimalController@updateAnimal');

Route::post('delete/{id}', 'AnimalController@delete');