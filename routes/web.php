<?php

//-----------------------client-------------------------------

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

//-----------------------End client-------------------------------
Auth::routes();

//-----------------------DASHBOARD-----------------------

Route::group(['prefix' => 'dashboard', 'middleware' => 'CheckAdmin'], function () {


    Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');


    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'Admin\CategoryController@category_list')->name('category_list');
        Route::get('/allCategory', 'Admin\\CategoryController@allCategory'); //datatable ajax
        Route::get('/add-category', 'Admin\\CategoryController@category_add')->name('category_add');
        Route::post('/add-category', 'Admin\\CategoryController@category_create')->name('category_create');
        Route::get('/{id}/edit-category', 'Admin\\CategoryController@category_edit')->name('category_edit');
        Route::post('/{id}/edit-category', 'Admin\\CategoryController@category_update')->name('category_update');
        Route::get('/{id}/remote-category', 'Admin\\CategoryController@category_remove')->name('category_remove');
    });

    //posts
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'Admin\\PostController@post_list')->name('post_list');
//        Route::get('/allCategory', 'Admin\\PostController@allCategory'); //datatable ajax
        Route::get('/add-post', 'Admin\\PostController@post_add')->name('post_add');
        Route::post('/add-post', 'Admin\\PostController@post_create')->name('post_create');
//        Route::get('/{id}/edit-category', 'Admin\\PostController@category_edit')->name('category_edit');
//        Route::post('/{id}/edit-category', 'Admin\\PostController@category_update')->name('category_update');
//        Route::get('/{id}/remote-category', 'Admin\\PostController@category_remove')->name('category_remove');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\\UserController@user_list')->name('user_list');
//        Route::get('/allCategory', 'Admin\\PostController@allCategory'); //datatable ajax
        Route::get('/add-user', 'Admin\\UserController@user_add')->name('user_add');
//        Route::post('/add-post', 'Admin\\UserController@post_create')->name('post_create');
//        Route::get('/{id}/edit-category', 'Admin\\UserController@category_edit')->name('category_edit');
//        Route::post('/{id}/edit-category', 'Admin\\UserController@category_update')->name('category_update');
//        Route::get('/{id}/remote-category', 'Admin\\UserController@category_remove')->name('category_remove');
    });

});

//-----------------------END DASHBOARD-----------------------
