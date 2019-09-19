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

use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'user',
     'as' => 'user.',
     'middleware' => 'auth'], function () {
    Route::get('profile', 'User\HomeController@profile')->name('profile');
    Route::get('new-post', 'User\PostController@create')->name('post-create');
    Route::post('new-post', 'User\PostController@store')->name('post-store');
    Route::get('detail-post', 'User\PostController@detail')->name('post-detail');
    Route::get('profile-finder', 'User\HomeController@profileFinder')->name('profile-finder');
    Route::get('profile-helper', 'User\HomeController@profileHelper')->name('profile-helper');
    Route::get('update-info/{user}', 'User\HomeController@updateInfo')->name('update-info');
    Route::post('add-info', 'Auth\LoginFacebookController@addInfo')->name('add-info');
    Route::get('change-password', 'User\HomeController@changePassword')->name('change-password');
    Route::post('save-password', 'User\UserController@savePassword')->name('save-password');
    Route::get('edit-profile', 'User\HomeController@editProfile')->name('edit-profile');
    Route::post('update-profile', 'User\UserController@updateProfile')->name('update-profile');
});

//Route::get('/admin', 'Admin\HomeController@index')->name('admin')->middleware('auth:admin');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/all-post', 'User\HomeController@allPost')->name('all-post');
Route::get('/category', 'User\HomeController@category')->name('category');

Route::get('/auth/redirect/{provider}', 'Auth\LoginFacebookController@redirect');
Route::get('/callback/{provider}', 'Auth\LoginFacebookController@callback');

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
    Route::get('/', 'Admin\CategoryController@index')->name('index');
    Route::post('store', 'Admin\CategoryController@store')->name('store');
    Route::post('update/{category}', 'Admin\CategoryController@update')->name('update');
    Route::get('destroy/{category}', 'Admin\CategoryController@destroy')->name('destroy');
});
Auth::routes();

