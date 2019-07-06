<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    dd('welcome to chi');
});
Route::group(['prefix'=>'live'], function(){

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('live.login_show');



});
