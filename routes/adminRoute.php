<?php 

Route::group(['prefix' => '/admin'], function(){

Route::get('/',['uses'=>'AdminController@index', 'as' =>'admin.index']);
Route::get('/history', 'AdminController@history')->name('adminhistory');
Route::get('/vision_mission', 'AdminController@vision_mission')->name('vision');
Route::get('/organization-chart', 'AdminController@vision_mission')->name('organization');
// Fiance
Route::get('/index', 'AdminController@finance')->name('finance.index');
Route::get('/credit-ability', 'AdminController@credit_ability')->name('credit-ability');
Route::get('/checkbalance', 'AdminController@checkbalance')->name('checkbalance');
Route::get('/credit', 'AdminController@credit')->name('credit');
Route::get('/payment', 'AdminController@payment')->name('payment');
Route::get('/currency', 'AdminController@currency')->name('currency');

Route::get('/service', 'AdminController@service')->name('adminservice');
Route::get('/about', 'AdminController@about')->name('about');
});




