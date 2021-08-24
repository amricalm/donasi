<?php

use Illuminate\Support\Facades\Route;
use App\Program;
//===================== ROUTE INDEX ===========================//
Route::get('/', 'LandingPageController@index')->name("landingpage");

$program    = new Program();
$this->program = $program;
if ($this->program->checkProgram(last(request()->segments()))) {
    Route::get('/{url?}', 'LandingPageController@program')->name("program");
}
//===================== ROUTE END INDEX ===========================//

//===================== ROUTE LOGIN ===========================//
Route::get('admin-login', 'AdminLoginController@index')->name('admin-login');
Route::post('admin-login/validasi', 'AdminLoginController@validasi');
Route::get('login', 'LoginController@index')->name('login');
Route::post('login/validasi', 'LoginController@validasi');
Route::get('register', 'LoginController@register')->name('register');
Route::post('register/validation', 'LoginController@regValidation');
Route::get('ceksesi', 'LoginController@ceksesi')->name('ceksesi');
//===================== ROUTE END LOGIN ===========================//

//===================== ROUTE LOGOUT ===========================//
Route::get('admin-logout', 'AdminLoginController@logout')->name('admin-logout');
Route::get('logout', 'LoginController@logout')->name('logout');
//===================== ROUTE END LOGOUT ===========================//

//===================== ROUTE DONATE ===========================//
Route::get('donate/{url?}', 'DonateController@index');
Route::post('donate/payment-method', 'DonateController@paymentMethod');
Route::post('donate/confirmation', 'DonateController@confirmation');
Route::post('donate/save', 'DonateController@save');
Route::get('donate/summary/{ID}', 'DonateController@summary');
//===================== ROUTE END DONATE ===========================//

//===================== ROUTE FUNDRAISER ===========================//
Route::get('fundraiser/{ID}', 'FundraiserController@index')->name("fundraiser");
//===================== ROUTE END FUNDRAISER ===========================//

//===================== ROUTE CEK USER SESSION ============================================================================//
Route::group(['middleware' => 'cekUserSession'], function () {


    //==== ROUTE JANGAN DIHAPUS - ROUTE UNTUK TINYMCE - FILEMANAGER =====//
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    //==== ROUTE END JANGAN DIHAPUS - ROUTE UNTUK TINYMCE - FILEMANAGER =====//

    //===================== ROUTE DASHBOARD ===========================//
    Route::get('admin-home', 'DashboardAdminController@index')->name("admin-home");
    Route::get('home', 'DashboardController@index')->name("home");
    //===================== ROUTE END DASHBOARD ===========================//

    //===================== ROUTE USER DONATIONS ===========================//
    Route::get('donations', ['middleware' => 'cekRole', 'uses' => 'DonationsController@index']);
    //===================== ROUTE END USER DONATIONS ===========================//

    //===================== ROUTE DONATE PLAN ===========================//
    Route::get('donate-plan', ['middleware' => 'cekRole', 'uses' => 'DonatePlanController@index']);
    Route::get('donate-plan/edit/{id}', ['middleware' => 'cekRole', 'uses' => 'DonatePlanController@edit']);
    Route::post('donate-plan/update', 'DonatePlanController@update');
    Route::get('donate-plan/hapus/{id}', ['middleware' => 'cekRole', 'uses' => 'DonatePlanController@hapus']);
    //===================== ROUTE END DONATE PLAN ===========================//

    //===================== ROUTE PROGRAM ===========================//
    Route::get('program', ['middleware' => 'cekRole', 'uses' => 'ProgramController@index']);
    Route::get('program/tambah', ['middleware' => 'cekRole', 'uses' => 'ProgramController@tambah']);
    Route::post('program/simpan', 'ProgramController@save');
    Route::get('program/edit/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@edit']);
    Route::post('program/update', 'ProgramController@update');
    Route::get('program/hapus/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@hapus']);
    Route::get('program/progresslist/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@progresslist']);
    Route::get('program/addprogress/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@addprogress']);
    Route::post('program/saveprogress', 'ProgramController@saveprogress');
    Route::get('program/editprogress/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@editprogress']);
    Route::post('program/updateprogress', 'ProgramController@updateprogress');
    Route::get('program/deleteprogress/{id}', ['middleware' => 'cekRole', 'uses' => 'ProgramController@deleteprogress']);
    //===================== ROUTE END PROGRAM ===========================//

    //===================== ROUTE USER ===========================//
    Route::get('user', ['middleware' => 'cekRole', 'uses' => 'UserController@index']);
    Route::get('user/tambah', ['middleware' => 'cekRole', 'uses' => 'UserController@tambah']);
    Route::get('user/load/{jenis?}/{id?}', 'UserController@load');
    Route::post('user/tambah/exec', ['middleware' => 'cekRole', 'uses' => 'UserController@add_exec']);
    Route::get('user/edit/{id}', ['middleware' => 'cekRole', 'uses' => 'UserController@edit']);
    Route::post('user/edit/exec', ['middleware' => 'cekRole', 'uses' => 'UserController@edit_exec']);
    Route::get('user/hapus/{id}', ['middleware' => 'cekRole', 'uses' => 'UserController@hapus']);
    Route::get('user/filter/{unitID}', 'UserController@filter');
    Route::post('user/ganti-password', 'UserController@ganti_password')->name('ganti.password');
    Route::post('user/ganti-pp', 'UserController@ganti_pp')->name('ganti.pp');
    //===================== ROUTE END USER ===========================//

    //===================== ROUTE GROUP ===========================//
    Route::get('group', ['middleware' => 'cekRole', 'uses' => 'GroupController@index']);
    Route::get('group/tambah', ['middleware' => 'cekRole', 'uses' => 'GroupController@tambah']);
    Route::post('group/tambah/exec', ['middleware' => 'cekRole', 'uses' => 'GroupController@add_exec']);
    Route::get('group/edit/{id}', ['middleware' => 'cekRole', 'uses' => 'GroupController@edit']);
    Route::post('group/edit/exec', ['middleware' => 'cekRole', 'uses' => 'GroupController@edit_exec']);
    Route::get('group/hapus/{id}', ['middleware' => 'cekRole', 'uses' => 'GroupController@hapus']);
    //===================== ROUTE END GROUP ===========================//
});
//===================== ROUTE END CEK USER SESSION ============================================================================//