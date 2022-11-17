<?php

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/{code}', 'App\Http\Controllers\HomeController@index');
