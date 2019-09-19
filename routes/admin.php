<?php
Route::namespace('Admin')->group(function () {
    Route::get('/loginAdmin','Auth\AdminController@loginAdmin')->name('loginAdmin');
    Route::post('/loginAdmin','Auth\AdminController@postAdmin');
    Route::get('/logoutAdmin','Auth\AdminController@logoutAdmin')->name('logoutAdmin');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'HomeController@index')->name('admin');
    });
});
