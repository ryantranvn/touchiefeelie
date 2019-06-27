<?php
	Auth::routes();
    Route::get('/logout', 'Auth\LogoutController@index')->name('logout');

// multi-langs
    Route::post('/admin/language', array(
        'Middleware' => 'LanguageSwitcher',
        'uses' => 'LanguageController@index'
    ));
/* csrfError */
    Route::get('/csrf-error', function() {
        return "Oops! Seems you couldn't submit form for a long time. Please try again.";
    })->name('csrfError');
/* sql log */
    Event::listen('illuminate.query', function($sql) {
        var_dump($sql);
    });

/* Admin */
   	Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('/dashboard', 'DashboardController@index');
        Route::resource('/customer', 'CustomerController');
        Route::resource('/blog', 'BlogController');
        Route::resource('/news', 'NewsController');
        Route::resource('/calendar', 'CalendarController');
        Route::resource('/library', 'LibraryController');
        Route::resource('/subscribe', 'SubscribeController');

        // route 404 for admin 
        Route::get('/404', 'DashboardController@admin404')->name('admin404');
    });
/* Ajax */
    Route::group(['namespace' => 'Api', 'prefix' => ''], function() {
        Route::post('/ajax_booking', 'AjaxController@ajaxBooking');
        Route::post('/ajax_subscribe', 'AjaxController@ajaxSubscribe');
        
    });

/* Web */
    Route::group(['namespace' => 'Web', 'prefix' => ''], function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/trang-chu', 'HomeController@index');

        Route::get('/lop-hoc-cham-yeu-thuong', 'TouchieFeelieClassController@index')->name('touchiefeelie');
        Route::get('/loi-ich-cua-viec-massage-cho-be', 'TouchieFeelieClassController@utilityMassage');
        Route::get('/thong-tin-lop-hoc', 'TouchieFeelieClassController@classInformation');
        Route::get('/san-pham-di-kem', 'TouchieFeelieClassController@product');
        Route::get('/thu-vien', 'TouchieFeelieClassController@library');

        Route::get('/gioi-thieu', 'AboutController@index')->name('about');
        Route::get('/hiep-hoi-massage-so-sinh-va-nhu-nhi-quoc-te-iaim', 'AboutController@iaim');
        Route::get('/cac-don-vi-hop-tac', 'AboutController@cooperativeUnits');
        Route::get('/cac-don-vi-ho-tro', 'AboutController@supportUnits');

        Route::get('/blog', 'BlogController@index');
        Route::get('/blog/{news_slug}', 'BlogController@detail');
        Route::get('/tin-tuc', 'NewsController@index');
        Route::get('/tin-tuc/{news_slug}', 'NewsController@detail');
        Route::get('/dat-hen', 'BookingController@index');
        Route::post('/dat-hen/dang-ky', 'BookingController@store');
        Route::get('/dat-hen-thanh-cong', 'BookingController@bookingSuccess');

        /* route 404 for website */
        Route::get('/404', 'ErrorController@index')->name('web404');
    });



//Route::get('/home', 'HomeController@index')->name('home');
