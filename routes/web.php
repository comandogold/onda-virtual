<?php

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesControllers@home')->name('index');

Route::resource('formularios', 'FormControllers');
