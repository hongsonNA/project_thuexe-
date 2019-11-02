<?php

//-----------------------client-------------------------------

Route::get('/', 'HomeController@index')->name('index');

Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/cate','HomeController@cate')->name('cate');
Route::get('/news','HomeController@news')->name('news');
Route::get('/profile','HomeController@profile')->name('profile');
//update_account_user
Route::post('/{id}/update_account','HomeController@update_account')->name('update_account');
//end////

//-----------------------End client-------------------------------
Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::group(['prefix' => 'dashboard', 'middleware' => 'CheckAdmin'], function () {


    Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');


    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('category_list');
        Route::get('/allCategory', 'Admin\\CategoryController@AllDatatable'); //datatable ajax
        Route::get('/add-category', 'Admin\\CategoryController@create')->name('category_add');
        Route::post('/add-category', 'Admin\\CategoryController@store')->name('category_create');
        Route::get('/{id}/edit-category', 'Admin\\CategoryController@edit')->name('category_edit');
        Route::post('/{id}/edit-category', 'Admin\\CategoryController@update')->name('category_update');
        Route::get('/{id}/remote-category', 'Admin\\CategoryController@destroy')->name('category_remove');
    });

    //city
    Route::group(['prefix' => 'city'], function () {
        Route::get('/', 'Admin\CityController@city_list')->name('city_list');
//        Route::get('/allCategory', 'Admin\\CityController@allCategory'); //datatable ajax
        Route::get('/add-city', 'Admin\\CityController@city_add')->name('city_add');
        Route::post('/add-city', 'Admin\\CityController@city_create')->name('city_create');
        Route::get('/{id}/edit-city', 'Admin\\CityController@city_edit')->name('city_edit');
        Route::post('/{id}/edit-city', 'Admin\\CityController@city_update')->name('city_update');
        Route::get('/{id}/remote-city', 'Admin\\CityController@city_remove')->name('city_remove');
    });

    //posts
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'Admin\\PostController@index')->name('post_list');
        Route::get('/allPost', 'Admin\\PostController@AllDatatable'); //datatable ajax
        Route::get('/add-post', 'Admin\\PostController@create')->name('post_add');
        Route::post('/add-post', 'Admin\\PostController@store')->name('post_create');
        Route::get('/{id}/edit-post', 'Admin\\PostController@edit')->name('post_edit');
        Route::post('/{id}/edit-post', 'Admin\\PostController@update')->name('post_update');
        Route::get('/{id}/remote-post', 'Admin\\PostController@destroy')->name('post_remove');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\\UserController@index')->name('user_list');
        Route::get('/allUser', 'Admin\\UserController@AllDatatable'); //datatable ajax
        Route::get('/add-user', 'Admin\\UserController@create')->name('user_add');
        Route::post('/add-user', 'Admin\\UserController@store')->name('user_create');
        Route::get('/{id}/edit-user', 'Admin\\UserController@edit')->name('user_edit');
        Route::post('/{id}/edit-user', 'Admin\\UserController@update')->name('user_update');
        Route::get('/{id}/remote-user', 'Admin\\UserController@destroy')->name('user_remove');
    });

});

//-----------------------END DASHBOARD-----------------------
