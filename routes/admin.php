<?php

use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function() {
    Route::get('/login','Management\Owner\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Management\Owner\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Management\Owner\Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Management\Owner\Auth\AdminController@index')->name('admin.dashboard');
   }) ;
