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

//cate
Route::get('/dashboard/category', 'Admin\CategoryController@category_list')->name('category_list');
Route::get('/dashboard/allCategory', 'Admin\CategoryController@allCategory'); //datatable ajax
Route::get('/dashboard/category/add-category', 'Admin\CategoryController@category_add')->name('category_add');
Route::post('/dashboard/category/add-category', 'Admin\CategoryController@category_create')->name('category_create');
Route::get('/dashboard/category/{id}/edit-category', 'Admin\CategoryController@category_edit')->name('category_edit');
Route::post('/dashboard/category/{id}/edit-category', 'Admin\CategoryController@category_update')->name('category_update');
Route::get('/dashboard/category/{id}/remote-category', 'Admin\CategoryController@category_remove')->name('category_remove');

//user
Route::get('/dashboard/user', 'Admin\UserController@user_list')->name('user_list');


//-----------------------END DASHBOARD-----------------------


//Route::middleware(['CheckAdmin'])->group(function () {
//
//    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');
//});


