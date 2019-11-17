<?php

Route::get('/home', 'LinksController@index');
Route::get('/links', 'LinksController@store');
Route::get('/getLinks', 'LinksController@create');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/', 'SessionsController@index');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');