<?php
//===================== ROUTE INDEX ===========================//
Route::get('/', 'LandingPageController@index');
//===================== ROUTE END INDEX ===========================//

//===================== ROUTE DONATE ===========================//
Route::get('donate', 'DonateController@index');
Route::get('donate/payment-method/{nominal?}','DonateController@paymentMethod');
Route::post('donate/confirmation','DonateController@confirmation');
Route::post('donate/save','DonateController@save');
//===================== ROUTE END DONATE ===========================//
