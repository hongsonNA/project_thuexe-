<?php

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');

Route::get('/dashboard/category', 'Admin\CategoryController@category_list')->name('category_list');

Route::get('/dashboard/category/add-category', 'Admin\CategoryController@category_add')->name('category_add');


//-----------------------END DASHBOARD-----------------------
