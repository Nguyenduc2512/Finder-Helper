<?php

Route::group(
    ['middleware' => 'auth'], function() {
    Route::get('/profile', 'User\HomeController@profile')->name('profile');
    }
);

Route::group(
    ['prefix' => 'user',
     'as' => 'user.',
     'middleware' => 'auth'], function () {
    Route::get('/profile-finder', 'User\HomeController@profileFinder')->name('profile-finder');
    Route::get('/profile-helper', 'User\HomeController@profileHelper')->name('profile-helper');
    Route::get('/update-info/{user}', 'User\HomeController@updateInfo')->name('update-info');
    Route::post('/add-info', 'Auth\LoginFacebookController@addInfo')->name('add-info');
});

Route::get('/home', 'Admin\HomeController@index')->name('admin')->middleware('auth:admin');	
Route::get('/loginAdmin','Auth\AdminController@loginAdmin')->name('loginAdmin')->middleware('guest');
Route::post('/loginAdmin','Auth\AdminController@postAdmin');
Route::get('/logoutAdmin','Auth\AdminController@logoutAdmin')->name('logoutAdmin');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/category', 'User\HomeController@category')->name('category');

Route::get('/auth/redirect/{provider}', 'Auth\LoginFacebookController@redirect');
Route::get('/callback/{provider}', 'Auth\LoginFacebookController@callback');
