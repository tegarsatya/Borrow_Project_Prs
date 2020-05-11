<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author', 'AuthorController@index')->name('author.index');

Route::get('/author/create', 'AuthorController@create')->name('author.create');

Route::post('/author', 'AuthorController@store')->name('author.store');

Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');

Route::put('/author/{author}', 'AuthorController@update')->name('author.update');

Route::get('/author/data', 'DataController@authors')->name('author.data');


