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

Route::get('/', 'pagescontroller@home')->name('home');
Route::get('about', 'pagescontroller@about')->name('about');
Route::get('objectives', 'pagescontroller@objectives')->name('objectives');
Route::get('principles', 'pagescontroller@principles')->name('principles');
Route::get('justifications', 'pagescontroller@justifications')->name('justifications');
Route::get('programmes', 'pagescontroller@programmes')->name('programmes');
Route::get('contact', 'pagescontroller@contact')->name('contact_us');
Route::get('models', 'pagescontroller@models')->name('models');
Route::get('faqs', 'pagescontroller@faqs')->name('faqs');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//user Dashboard

// Route::get('/user', 'UserController@index')->name('user');


//Admin Middleware

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


//User Middleware

Route::group(['as'=>'user.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


//Manager Middleware

Route::group(['as'=>'manager.','prefix' => 'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
