<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {

            Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
            Route::get('logout', 'LoginController@logout')->name('admin.logout');

            Route::group(['prefix' => 'settings'], function () {
                Route::get('shipping-methods/{type}', 'SettingsController@editShippingMethods')->name('edit.shippings.methods');
                Route::put('shipping-methods/{id}', 'SettingsController@updateShippingMethods')->name('update.shippings.methods');
            });

            Route::group(['prefix' => 'profile'], function () {
                Route::get('edit', 'ProfileController@editProfile')->name('edit.profile.admin');
                Route::put('update', 'ProfileController@updateProfile')->name('update.profile.admin');
                // Route::put('update/password', 'ProfileController@updatePassword')->name('update.profile.password.admin');
            });
            
        });

        Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {

            Route::get('login', 'LoginController@login')->name('admin.login');
            Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
        });
    }
);
