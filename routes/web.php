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

Route::get('/', function () {
    return view('index');
});
Route::view('layout', 'layouts.master');
Route::view('listapply', 'listapply');
Route::view('profile', 'profile');
Route::view('job-detail', 'job-detail');
Route::view('feedback', 'feedback');
Route::view('all-job', 'all-job');
Route::view('sign-in', 'loginUser.sign-in');
Route::view('sign-up', 'loginUser.sign-up');
