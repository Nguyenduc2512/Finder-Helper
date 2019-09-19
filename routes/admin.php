<?php

use Illuminate\Support\Facades\Route;

Route::get('/loginAdmin','Auth\AdminController@loginAdmin')->name('loginAdmin');
Route::post('/loginAdmin','Auth\AdminController@postAdmin');
Route::get('/logoutAdmin','Auth\AdminController@logoutAdmin')->name('logoutAdmin');
Route::namespace('Admin')->group(function () {
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'HomeController@index')->name('admin');
        Route::group(['prefix'=> 'user'], function (){
            Route::get('/', 'UserController@index')->name('list-user');
        });
    });
});
