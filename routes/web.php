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
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
Route::group(
    ['middleware' => 'auth'], function() {

    }
);
Route::get('/login', 'Auth\LoginController@loginForm') -> name('login');
Route::post('/login','Auth\LoginController@store');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/', 'User\HomeController@index')->name('home');
