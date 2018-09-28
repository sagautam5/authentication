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

//Auth::routes();

Route::get('/', function () {
    return redirect()->to('/login');
});

Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/register','Auth\RegisterController@register');

Route::group(['middleware' => 'adminRoutes'], function(){
    Route::group(['prefix' => 'admin'], function (){
        Route::get('dashboard','DashboardController@adminDashboard');
    });
});

Route::group(['middleware' => 'guestRoutes'], function(){
    Route::group(['prefix' => 'guest'],function (){
        Route::get('dashboard','DashboardController@guestDashboard');
    });
});
