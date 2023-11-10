<?php

use Snake\Core\Routing\Route;

Route::get('/', 'WelcomeController')->alias('landing');
Route::get('/login', 'LoginController@index')->alias('login.index');
Route::post('/login', 'LoginController@store')->alias('login.store');
Route::post('/logout', 'LogoutController')->alias('logout');
Route::get('/admin/dashboard', 'AdminController@index')->alias('admin.dashboard.index');
