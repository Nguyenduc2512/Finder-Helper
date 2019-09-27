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

Route::group(
    ['prefix' => 'user',
        'as' => 'user.',
        'middleware' => 'auth'], function () {
    Route::get('profile', 'User\HomeController@profile')->name('profile');
    Route::get('profile-finder', 'User\HomeController@profileFinder')->name('profile-finder');
    Route::get('profile-helper', 'User\HomeController@profileHelper')->name('profile-helper');
    Route::get('update-info/{user}', 'User\HomeController@updateInfo')->name('update-info');
    Route::post('add-info', 'Auth\LoginFacebookController@addInfo')->name('add-info');
    Route::get('change-password', 'User\HomeController@changePassword')->name('change-password');
    Route::post('save-password', 'User\UserController@savePassword')->name('save-password');
    Route::get('edit-profile', 'User\HomeController@editProfile')->name('edit-profile');
    Route::post('update-profile', 'User\UserController@updateProfile')->name('update-profile');
    Route::get('coin', 'User\CoinController@index')->name('coin');
    Route::post('store', 'User\CoinController@store')->name('store');
    Route::get('show-info', 'User\PagesController@showInfo')->name('show-info');

    //Finder route
    Route::get('new-post', 'User\PostController@create')->name('post-create');
    Route::post('new-post', 'User\PostController@store')->name('post-store');
    Route::get('apply-request/{id}', 'User\PostController@applyRequest')->name('apply-request');
    Route::get('delele-post/{id}', 'User\UserController@deletePost')->name('delete-post');
    Route::post('accept-user/{id}', 'User\UserController@acceptUser')->name('accept-user');
    Route::post('decline-user/{id}', 'User\UserController@declineUser')->name('decline-user');
    Route::get('owner-success/{id}', 'User\UserController@ownerSuccess')->name('owner-success');

    //Helper route
    Route::get('confirm-success/{id}', 'User\PostController@confirmSuccess')->name('confirm-success');
    Route::post('apply-job', 'User\UserController@applyJob')->name('apply-job');
    Route::get('cancel-apply/{id}', 'User\UserController@cancelApply')->name('cancel-apply');
    Route::get('helper-confirm/{id}', 'User\UserController@helperConfirm')->name('helper-confirm');

    Route::get('contact', 'ContactController@index')->name('index');
    Route::post('contact', 'ContactController@store')->name('contact');
});

Route::get('/admin', 'Admin\HomeController@index')->name('admin')->middleware('auth:admin');
Route::get('/loginAdmin', 'Auth\AdminController@loginAdmin')->name('loginAdmin');
Route::post('/loginAdmin', 'Auth\AdminController@postAdmin');
Route::get('/logoutAdmin', 'Auth\AdminController@logoutAdmin')->name('logoutAdmin');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/all-post', 'User\HomeController@allPost')->name('all-post');
Route::get('/category', 'User\HomeController@category')->name('category');
Route::get('detail-post/{id}', 'User\PostController@detail')->name('post-detail');
Route::get('post-category/{id}', 'User\HomeController@postCategory')->name('post-category');

Route::get('/auth/redirect/{provider}', 'Auth\LoginFacebookController@redirect');
Route::get('/callback/{provider}', 'Auth\LoginFacebookController@callback');

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
    Route::get('/', 'Admin\CategoryController@index')->name('index');
    Route::post('store', 'Admin\CategoryController@store')->name('store');
    Route::post('update/{category}', 'Admin\CategoryController@update')->name('update');
    Route::get('destroy/{category}', 'Admin\CategoryController@destroy')->name('destroy');
});

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', 'Admin\PostController@index')->name('index');
    Route::get('{post}/request', 'Admin\PostController@edit')->name('edit');
    Route::post('update', 'Admin\PostController@update')->name('update');
    Route::get('destroy/{post}', 'Admin\PostController@destroy')->name('destroy');
});

Route::group(['prefix' => 'user-admin'], function () {
    Route::get('/list', 'Admin\UserController@index')->name('list-user');
});

Route::get('/sign', 'Auth\SignUpController@show')->name('sign');
Route::post('/sign', 'Auth\SignUpController@create');
Route::group(['prefix' => 'coins', 'as' => 'coins.'], function () {
    Route::get('/', 'Admin\CoinController@index')->name('index');
    Route::get('{coin}/edit', 'Admin\CoinController@edit')->name('edit');
    Route::post('update', 'Admin\CoinController@update')->name('update');
    Route::post('store', 'Admin\CoinController@store')->name('store');
});

Auth::routes();
Route::post('search', 'User\HomeController@search')->name('search');
Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', 'ContactController@listContact')->name('list-contact');
    Route::post('update', 'ContactController@update')->name('update');
});
