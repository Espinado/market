<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dealer')->group(function () {
    Route::get('/login', 'Management\Dealers\Auth\DealerLoginController@showLoginForm')->name('dealer.login');
    Route::post('/login', 'Management\Dealers\Auth\DealerLoginController@login')->name('dealer.login.submit');
    Route::get('logout/', 'Management\Dealers\Auth\DealerLoginController@logout')->name('dealer.logout');
    Route::get('/', 'Management\Dealers\Auth\DealerController@index')->name('dealer.dashboard');
    // Registration Routes...


});
