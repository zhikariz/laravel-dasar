<?php

Route::get('/','BukuController@index');
Route::get('/create','BukuController@create');
Route::post('/','BukuController@store');

Route::get('{id}/edit','BukuController@edit');
Route::put('{id}','BukuController@update');

Route::delete('{id}','BukuController@destroy');
