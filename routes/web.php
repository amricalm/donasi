<?php
//===================== ROUTE INDEX ===========================//
Route::get('/', 'LandingPageController@index');
//===================== ROUTE END INDEX ===========================//

//===================== ROUTE LOGIN ===========================//
Route::get('admin-login', 'AdminLoginController@index')->name('admin-login');
Route::post('admin-login/validasi', 'AdminLoginController@validasi');
//===================== ROUTE END LOGIN ===========================//

//===================== ROUTE LOGOUT ===========================//
Route::get('logout','AdminLoginController@logout')->name('logout');
//===================== ROUTE END LOGOUT ===========================//

//===================== ROUTE DONATE ===========================//
Route::get('donate', 'DonateController@index');
Route::post('donate/payment-method','DonateController@paymentMethod');
Route::post('donate/confirmation','DonateController@confirmation');
Route::post('donate/save','DonateController@save');
Route::get('donate/summary/{ID}','DonateController@summary');
//===================== ROUTE END DONATE ===========================//

//===================== ROUTE CEK USER SESSION ============================================================================//
Route::group(['middleware' => 'cekUserSession'], function () {
    //===================== ROUTE DASHBOARD ===========================//
    Route::get('home', 'DashboardController@index')->name("home");
    //===================== ROUTE END DASHBOARD ===========================//

    //===================== ROUTE DONATE PLAN ===========================//
    Route::get('donate-plan', ['middleware'=>'cekRole', 'uses'=>'DonatePlanController@index']);
    Route::get('donate-plan/hapus/{id}', ['middleware'=>'cekRole', 'uses'=>'DonatePlanController@hapus']);
    //===================== ROUTE END DONATE PLAN ===========================//

    //===================== ROUTE USER ===========================//
    Route::get('user', ['middleware'=>'cekRole', 'uses'=>'UserController@index']);
    Route::get('user/tambah', ['middleware'=>'cekRole', 'uses'=>'UserController@tambah']);
    Route::get('user/load/{jenis?}/{id?}','UserController@load');
    Route::post('user/tambah/exec', ['middleware'=>'cekRole', 'uses'=>'UserController@add_exec']);
    Route::get('user/edit/{id}', ['middleware'=>'cekRole', 'uses'=>'UserController@edit']);
    Route::post('user/edit/exec', ['middleware'=>'cekRole', 'uses'=>'UserController@edit_exec']);
    Route::get('user/hapus/{id}', ['middleware'=>'cekRole', 'uses'=>'UserController@hapus']);
    Route::get('user/filter/{unitID}', 'UserController@filter');
    Route::post('user/ganti-password', 'UserController@ganti_password')->name('ganti.password');
    Route::post('user/ganti-pp', 'UserController@ganti_pp')->name('ganti.pp');
    //===================== ROUTE END USER ===========================//

    //===================== ROUTE GROUP ===========================//
    Route::get('group', ['middleware'=>'cekRole', 'uses'=>'GroupController@index']);
    Route::get('group/tambah', ['middleware'=>'cekRole', 'uses'=>'GroupController@tambah']);
    Route::post('group/tambah/exec', ['middleware'=>'cekRole', 'uses'=>'GroupController@add_exec']);
    Route::get('group/edit/{id}', ['middleware'=>'cekRole', 'uses'=>'GroupController@edit']);
    Route::post('group/edit/exec', ['middleware'=>'cekRole', 'uses'=>'GroupController@edit_exec']);
    Route::get('group/hapus/{id}', ['middleware'=>'cekRole', 'uses'=>'GroupController@hapus']);
    //===================== ROUTE END GROUP ===========================//
});
//===================== ROUTE END CEK USER SESSION ============================================================================//