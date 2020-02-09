<?php

// Показать таблицу на главной странице
Route::get('/', 'AnimalController@showAll');

// Показать форму создания животного
Route::get('create', 'AnimalController@create');

// Обработать данные с формы создания животного
Route::post('add_animal', 'AnimalController@addAnimal');

// Показать форму редактирования животного
Route::get('edit/{id}', 'AnimalController@edit');

// Обработать данные с формы редактирования животного
Route::post('update_animal', 'AnimalController@updateAnimal');

// Удалить животное
Route::get('delete/{id}', 'AnimalController@delete');