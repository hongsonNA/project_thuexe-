<?php

//-----------------------client-------------------------------

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('about');

//-----------------------End client-------------------------------
Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

//-----------------------END DASHBOARD-----------------------



