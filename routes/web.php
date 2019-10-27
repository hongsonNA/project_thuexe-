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
        Route::get('/{id}/edit-post', 'Admin\\PostController@post_edit')->name('post_edit');
        Route::post('/{id}/edit-post', 'Admin\\PostController@post_update')->name('post_update');
//        Route::get('/{id}/remote-category', 'Admin\\PostController@category_remove')->name('category_remove');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\\UserController@user_list')->name('user_list');
//        Route::get('/allCategory', 'Admin\\PostController@allCategory'); //datatable ajax
        Route::get('/add-user', 'Admin\\UserController@user_add')->name('user_add');
        Route::post('/add-user', 'Admin\\UserController@user_create')->name('user_create');
        Route::get('/{id}/edit-user', 'Admin\\UserController@user_edit')->name('user_edit');
        Route::post('/{id}/edit-user', 'Admin\\UserController@user_update')->name('user_update');
        Route::get('/{id}/remote-user', 'Admin\\UserController@user_remove')->name('user_remove');
    });

});

//-----------------------END DASHBOARD-----------------------
