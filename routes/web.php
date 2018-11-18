<?php
	Auth::routes();

	/* csrfError */
    Route::get('/csrf-error', function() {
        return "Oops! Seems you couldn't submit form for a long time. Please try again.";
    })->name('csrfError');


   	Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        // Route::get('/dashboard', 'DashboardController@index');
        // Route::resource('/category', 'CategoryController');
        // Route::resource('/user', 'UserController');
        // Route::resource('/contact', 'ContactController');
        // Route::resource('/subscribe', 'SubscribeController');
        // Route::resource('/setting', 'SettingController');

        /* route 404 for admin */
        Route::get('/404', 'DashboardController@admin404')->name('admin404');
    });

/* Api */
    // Route::group(['namespace' => 'Api', 'prefix' => 'api'], function() {
    // });

/* Web */
    Route::group(['namespace' => 'Web', 'prefix' => ''], function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/home', 'HomeController@index');
        Route::get('/project', 'ProjectController@index')->name('project');
        Route::get('/what-we-do', 'WhatWeDoController@index')->name('whatwedo');
        Route::get('/about-us', 'AboutUsController@index')->name('aboutus');
        Route::get('/contact', 'ContactController@index')->name('contact');
        Route::get('/credential', 'DownloadController@credential');

        /* route 404 for website */
        Route::get('/404', 'ErrorController@index')->name('web404');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
