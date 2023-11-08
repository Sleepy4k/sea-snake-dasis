<?php

use Snake\Core\Routing\Route;

Route::get('/', 'WelcomeController');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::post('/logout', 'LogoutController');
Route::get('/admin/dashboard', 'AdminController@index');
