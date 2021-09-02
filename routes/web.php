<?php

use Illuminate\Support\Facades\Route;

//===================== ROUTE INDEX ===========================//
Route::get('/', 'LoginController@index')->name("login");
//===================== ROUTE END INDEX ===========================//

//===================== ROUTE LOGIN ===========================//
Route::get('login', 'LoginController@index')->name('login');
Route::post('login/validasi', 'LoginController@validasi');
Route::get('register', 'LoginController@register')->name('register');
Route::post('register/validation', 'LoginController@regValidation');
Route::get('ceksesi', 'LoginController@ceksesi')->name('ceksesi');
//===================== ROUTE END LOGIN ===========================//

//===================== ROUTE LOGOUT ===========================//
Route::get('logout', 'LoginController@logout')->name('logout');
//===================== ROUTE END LOGOUT ===========================//

//===================== ROUTE CEK USER SESSION ============================================================================//
Route::group(['middleware' => 'cekUserSession'], function () {

    //==== ROUTE JANGAN DIHAPUS - ROUTE UNTUK TINYMCE - FILEMANAGER =====//
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    //==== ROUTE END JANGAN DIHAPUS - ROUTE UNTUK TINYMCE - FILEMANAGER =====//

    //===================== ROUTE DASHBOARD ===========================//
    Route::get('home', 'DashboardController@mobile')->name("home");
    //===================== ROUTE END DASHBOARD ===========================//

    //===================== ROUTE TASK ===========================//
    Route::get('task', 'IndividualTaskController@index')->name('individualtask.index');
    Route::get('task/create-step-one', 'IndividualTaskController@createStepOne')->name('individualtask.create.step.one');
    Route::post('task/create-step-one', 'IndividualTaskController@postCreateStepOne')->name('individualtask.create.step.one.post');
    Route::get('task/create-step-two', 'IndividualTaskController@createStepTwo')->name('individualtask.create.step.two');
    Route::post('task/create-step-two', 'IndividualTaskController@postCreateStepTwo')->name('individualtask.create.step.two.post');
    Route::get('task/create-step-three', 'IndividualTaskController@createStepThree')->name('individualtask.create.step.three');
    Route::post('task/create-step-three', 'IndividualTaskController@postCreateStepThree')->name('individualtask.create.step.three.post');
    Route::get('task/create-step-four', 'IndividualTaskController@createStepFour')->name('individualtask.create.step.four');
    Route::post('task/create-step-four', 'IndividualTaskController@postCreateStepFour')->name('individualtask.create.step.four.post');
    Route::get('task/create-step-five', 'IndividualTaskController@createStepFive')->name('individualtask.create.step.five');
    Route::post('task/create-step-five', 'IndividualTaskController@postCreateStepFive')->name('individualtask.create.step.five.post');
    Route::get('task/create-step-six', 'IndividualTaskController@createStepSix')->name('individualtask.create.step.six');
    Route::post('task/create-step-six', 'IndividualTaskController@postCreateStepSix')->name('individualtask.create.step.six.post');
    //===================== ROUTE END TASK ===========================//

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
