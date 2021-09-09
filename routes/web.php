<?php

use Illuminate\Support\Facades\Route;

//===================== ROUTE INDEX ===========================//
Route::get('/', 'LoginController@index')->name("login");
//===================== ROUTE END INDEX ===========================//

//===================== ROUTE LOGIN ===========================//
Route::get('login', 'LoginController@index')->name('login');
Route::post('login/validasi', 'LoginController@validasi');
Route::get('registration', 'LoginController@registration')->name('registration');
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
    //Data Diri
    Route::get('task/create-step-one', 'IndividualTaskController@createStepOne')->name('individualtask.create.step.one');
    Route::post('task/create-step-one', 'IndividualTaskController@postCreateStepOne')->name('individualtask.create.step.one.post');

    //Tes Kesehatan
    Route::get('imt/create', 'IndividualTaskController@imtCreate')->name('imt.create');
    Route::post('imt/create', 'IndividualTaskController@imtCreatePost')->name('imt.create.post');

    //Kespro
    Route::get('kespro/create-step-one', 'IndividualTaskController@kesproCreateStepOne')->name('kespro.create.step.one');
    Route::post('kespro/create-step-one', 'IndividualTaskController@kesproCreateStepOnePost')->name('kespro.create.step.one.post');
    Route::get('kespro/create-step-two', 'IndividualTaskController@kesproCreateStepTwo')->name('kespro.create.step.two');
    Route::post('kespro/create-step-two', 'IndividualTaskController@kesproCreateStepTwoPost')->name('kespro.create.step.two.post');
    Route::get('kespro/create-step-three', 'IndividualTaskController@kesproCreateStepThree')->name('kespro.create.step.three');
    Route::post('kespro/create-step-three', 'IndividualTaskController@kesproCreateStepThreePost')->name('kespro.create.step.three.post');
    Route::get('kespro/create-step-four', 'IndividualTaskController@kesproCreateStepFour')->name('kespro.create.step.four');
    Route::post('kespro/create-step-four', 'IndividualTaskController@kesproCreateStepFourPost')->name('kespro.create.step.four.post');

    //Tes Pola Makan
    Route::get('pola-makan/create-step-one', 'IndividualTaskController@polaMakanCreateStepOne')->name('polamakan.create.step.one');
    Route::post('pola-makan/create-step-one', 'IndividualTaskController@polaMakanCreateStepOnePost')->name('polamakan.create.step.one.post');
    Route::get('pola-makan/create-step-two', 'IndividualTaskController@polaMakanCreateStepTwo')->name('polamakan.create.step.two');
    Route::post('pola-makan/create-step-two', 'IndividualTaskController@polaMakanCreateStepTwoPost')->name('polamakan.create.step.two.post');
    Route::get('pola-makan/create-step-three', 'IndividualTaskController@polaMakanCreateStepThree')->name('polamakan.create.step.three');
    Route::post('pola-makan/create-step-three', 'IndividualTaskController@polaMakanCreateStepThreePost')->name('polamakan.create.step.three.post');
    Route::get('pola-makan/create-step-four', 'IndividualTaskController@polaMakanCreateStepFour')->name('polamakan.create.step.four');
    Route::post('pola-makan/create-step-four', 'IndividualTaskController@polaMakanCreateStepFourPost')->name('polamakan.create.step.four.post');

    //Tes Kesehatan
    Route::get('aktivitas-fisik/create', 'IndividualTaskController@fisikCreate')->name('fisik.create');
    Route::post('aktifitas-fisik/create', 'IndividualTaskController@fisikCreatePost')->name('fisik.create.post');

    //Tes Stress Kerja
    Route::get('stress-kerja/create', 'IndividualTaskController@stressCreate')->name('stress.create');
    Route::post('stress-kerja/create', 'IndividualTaskController@stressCreatePost')->name('stress.create.post');
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
