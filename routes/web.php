<?php

//-----------------------client-------------------------------

Route::get('/', 'HomeController@index')->name('index');

Route::get('/gioi-thieu', 'HomeController@about')->name('about');
Route::get('/lien-he', 'HomeController@contact')->name('contact');
Route::get('/danh-sach-xe', 'HomeController@cate')->name('cate');
Route::get('/bai-viet', 'HomeController@news')->name('news');
Route::get('/thong-tin-ca-nhan', 'HomeController@profile')->name('profile');
Route::get('/dich-vu-cuu-ho', 'HomeController@support')->name('support');
Route::get('/admin_us', 'HomeController@admin_us')->name('admin_us');
Route::get('chi-tiet/{id}', 'HomeController@detail')->name('detail');
Route::post('/add-contact', 'Member\\ContactController@store');
//detailNews
Route::post('loarmore', 'HomeController@loarmore')->name('loarmore');
//load more
Route::get('{id}/cateUser','HomeController@cateUser')->name('cateUser');
Route::get('{id}/deleteBooking','HomeController@deleteBooking')->name('deleteBooking');

Route::get('/{id}/report_comment', 'HomeController@report_comment')->name('report_comment');
//    Route::post('/{id}/report_comment','HomeController@report_comment')->name('report_comment');
Route::get('{id}/detail_news', 'HomeController@detail_news')->name('detail_news');
Route::post('/{id}/post_comment', 'HomeController@post_comment')->name('post_comment');
Route::post('/{id}/vehicle_comment', 'HomeController@vehicle_comment')->name('vehicle_comment');
//=======Dang ky thong tin xe=======
Route::post('/{id}/booking_car', 'HomeController@booking_car')->name('booking_car');
//update_account_user
Route::post('/{id}/update_account', 'HomeController@update_account')->name('update_account');
//end////
//====history=========
Route::get('history', 'HomeController@history')->name('history');

//-------------manager_user-----------------


Route::group(['prefix' => 'vehicles'], function () {
    Route::get('/', 'ManagerUsController@dashboard')->name('Admin');
    Route::get('manage', 'ManagerUsController@manage')->name('manage');
    Route::get('add_vehicles', 'ManagerUsController@add')->name('add_vehicles');
    Route::post('create-vehicles', 'ManagerUsController@create')->name('create-vehicles');
    Route::get('{id}/edit_vehicles', 'ManagerUsController@edit_vehicles')->name('edit_vehicles');
    Route::post('{id}/update_vehicles', 'ManagerUsController@update_vehicles')->name('update_vehicles');
    Route::get('/{id}/remote', 'ManagerUsController@remote')->name('remote');
    //get district
    Route::get('states/{id}', 'ManagerUsController@states')->name('states');
    Route::get('states_update/{id}', 'ManagerUsController@states_update')->name('states_update');
    //waiting car and carBooking
    Route::get('waiting', 'ManagerUsController@waiting_car')->name('waiting');
    Route::get('/allWaiting', 'ManagerUsController@AllDatatable');
    Route::get('booking', 'ManagerUsController@carBooking')->name('booking');
    // update status booking
    Route::post('change/{id}', 'ManagerUsController@change')->name('change');
    Route::post('danger/{id}', 'ManagerUsController@danger')->name('danger');
//   delete_comment
    Route::get('/{id}/removeCM', 'ManagerUsController@removeCM')->name('removeCM');
    //Profile member
    Route::get('profile_member', 'ManagerUsController@profile_member')->name('profile_member');
//=====Chart js=====
});
Route::get('/chart','ManagerUsController@chartCar')->name('chart');

//---search
Route::post('/search_car', 'HomeController@search_car')->name('search_car');
Route::post('/search_cate', 'HomeController@search_cate')->name('search_cate');
//----booknow
Route::get('city/{id}', 'HomeController@city')->name('city');
Route::get('state/{id}', 'HomeController@state')->name('state');
Route::get('state_cate/{id}', 'HomeController@state_cate')->name('state_cate');
//end book now
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

    //category
    Route::group(['prefix' => 'model'], function () {
        Route::get('/', 'Admin\ModelCarController@index')->name('model_list');
        Route::get('/allModel', 'Admin\\ModelCarController@AllDatatable'); //datatable ajax
        Route::get('/add-model', 'Admin\\ModelCarController@create')->name('model_add');
        Route::post('/add-model', 'Admin\\ModelCarController@store')->name('model_create');
        Route::get('/{id}/edit-model', 'Admin\\ModelCarController@edit')->name('model_edit');
        Route::post('/{id}/edit-model', 'Admin\\ModelCarController@update')->name('model_update');
        Route::get('/{id}/remote-model', 'Admin\\ModelCarController@destroy')->name('model_remove');
    });

    //city
    Route::group(['prefix' => 'city'], function () {
//        city
        Route::get('/', 'Admin\CityController@index')->name('city_list');   //list city district

//        Route::get('/allCategory', 'Admin\\CityController@allCategory'); //datatable ajax
        Route::get('/add-city', 'Admin\\CityController@create')->name('city_add');
        Route::post('/add-city', 'Admin\\CityController@store')->name('city_create');
        Route::get('/{id}/edit-city', 'Admin\\CityController@edit')->name('city_edit');
        Route::post('/{id}/edit-city', 'Admin\\CityController@update')->name('city_update');
        Route::get('/{id}/remote-city', 'Admin\\CityController@destroy')->name('city_remove');

//        district
        Route::get('district/add-district', 'Admin\\DistrictController@create')->name('district_add');
        Route::post('district/add-district', 'Admin\\DistrictController@store')->name('district_create');
        Route::get('district/{id}/edit-district', 'Admin\\DistrictController@edit')->name('district_edit');
        Route::post('district/{id}/edit-district', 'Admin\\DistrictController@update')->name('district_update');
        Route::get('district/{id}/remote-district', 'Admin\\DistrictController@destroy')->name('district_remove');

//      Ajax
        Route::get('ajaxDistrict', 'Admin\\CityController@ajax')->name('ajaxGetDistrict');
//      search
        Route::get('/search-district', 'Admin\\CityController@search')->name('search_district');

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

    //posts
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', 'Member\\ContactController@index')->name('contact_list');
        Route::get('/allContact', 'Member\\ContactController@AllDatatable'); //datatable ajax
        Route::get('/{id}/edit-contact', 'Member\\ContactController@edit')->name('contact_edit');
        Route::post('/{id}/edit-contact', 'Member\\ContactController@update')->name('contact_update');
    });

    //profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'Admin\\ProfileController@index')->name('dashboard_profile');
    });

    //user
    Route::group(['prefix' => 'user', 'middleware' => 'CheckUrl'], function () {
        Route::get('/', 'Admin\\UserController@index')->name('user_list');
//        Route::get('/allUser', 'Admin\\UserController@AllDatatable'); //datatable ajax
        Route::get('/add-user', 'Admin\\UserController@create')->name('user_add');
        Route::post('/add-user', 'Admin\\UserController@store')->name('user_create');
        Route::get('/{id}/edit-user', 'Admin\\UserController@edit')->name('user_edit');
        Route::post('/{id}/edit-user', 'Admin\\UserController@update')->name('user_update');
        Route::get('/{id}/remote-user', 'Admin\\UserController@destroy')->name('user_remove');
    });
});


//-----------------------END DASHBOARD-----------------------
