<?php

Route::group(['middleware' => 'web'], function () {

    // Admin
    Route::group(['prefix' => 'admin', 'as' => 'admin::', 'namespace' => 'Admin'], function () {

        // Authentication
        Route::get('login', 'Auth\AuthController@getLogin');
        Route::post('login', 'Auth\AuthController@login');
        Route::get('logout', 'Auth\AuthController@logout');

        // Password Reset
        //Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
        //Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
        //Route::post('password/reset', 'Auth\PasswordController@reset');

        // Dashborard
        Route::get('/', 'HomeController@index');
    });
});
