<?php

use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function() {
    Route::get('/login','Management\Owner\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Management\Owner\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Management\Owner\Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Management\Owner\Auth\AdminController@index')->name('admin.dashboard');

    Route::get('/admin/profile', 'Auth\AdminController@profile')->name('admin.profile');
    Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
    Route::get('Change/Password', 'Auth\AdminController@ChangePassword')->name('admin.password.change');
    Route::post('password/update', 'Auth\AdminController@Update_pass')->name('admin.password.update');
    // Route::get('logout/', 'Auth\AdminController@logout')->name('admin.logout');

    //----------------------

     //Dealers information
     Route::get('dealers_list', 'Management\Owner\Dealers_info\DealerCompanyController@index')->name('admin.dealers.list');
     Route::get('new_dealer_company_form', 'Management\Owner\Dealers_info\DealerCompanyController@addDealerCompany')->name('add_dealer.company');
     Route::post('store-dealer-company', 'Management\Owner\Dealers_info\DealerCompanyController@storeDealerCompany')->name('store.dealer.company');
     Route::get('dealer/company/profile/{uuid}', 'Management\Owner\Dealers_info\DealerCompanyController@DealerCompanyProfile')->name('dealer.company.profile');

     //Dealer user invitation system

     Route::get('generate/invite','Management\Owner\Dealers_info\DealerUserInviteController@create');
    //---------------------


       // Categoies

   }) ;
