<?php

//-----------------------client-------------------------------

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//-----------------------End client-------------------------------
Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');

Route::get('/dashboard/category', 'Admin\CategoryController@category_list')->name('category_list');
Route::get('/dashboard/category/add-category', 'Admin\CategoryController@category_add')->name('category_add');
Route::post('/dashboard/category/add-category', 'Admin\CategoryController@category_create')->name('category_create');


//-----------------------END DASHBOARD-----------------------



