<?php

Route::get('/', 'mahasiswaController@index');
Route::get('back', 'mahasiswaController@back');
Route::get('create', 'mahasiswaController@create');
Route::post('insert', 'mahasiswaController@insert');
Route::get('delete/{id}', 'mahasiswaController@delete');
Route::get('edit/{id}', 'mahasiswaController@edit');
Route::post('update/{id}', 'mahasiswaController@update');
Route::get('detail/{id}', 'mahasiswaController@detail');
