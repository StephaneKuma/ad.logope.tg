<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/about_us', 'PagesController@about_us')->name('about_us');

Route::get('/activities', 'PagesController@activities')->name('activities');

Route::get('/sermons', 'PagesController@sermons')->name('sermons');


//Auth::routes();

// User
Route::group(['middleware' => ['auth', 'user'], 'namespace' => 'User', 'prefix' => 'user', 'as' => 'users.'], function () {
    Route::get('dashboard', 'Dashboard@index')->name('dashboard');
});

// Editor
Route::group(['prefix' => 'editor', 'middleware' => ['auth', 'editor'], 'namespace' => 'Editor', 'as' => 'editors.'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashobord');
});

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashobord');
});
