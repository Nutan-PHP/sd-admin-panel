<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Cms'], function () {
    //All the admin routes will be defind here
    Route::match(['get', 'post'], '/admin', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
        Route::get('admin/settings', 'AdminController@settings')->name('settings');
        Route::post('admin/check-current-pwd', 'AdminController@checkCurrentPwd');
        Route::post('admin/update-admin', 'AdminController@updateAdmin');
        Route::get('admin/logout', 'AdminController@logout');
    });
});
