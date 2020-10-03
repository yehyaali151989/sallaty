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
            });

            // ================================== Begin Main Categories Routes ========================================== //
            Route::group(['prefix' => ''], function () {
                Route::resource('main_categories', 'MainCategoriesController')->except('show');
                Route::get('main_categories/{id}', 'MainCategoriesController@destroy')->name('main_categories.destroy');
            });
            // ================================== End Main Categories Routes ============================================ //

            // ================================== Begin Sub Categories Routes ========================================== //
            // Route::group(['prefix' => ''], function () {
            //     Route::resource('sub_categories', 'SubCategoriesController')->except('show');
            //     Route::get('sub_categories/{id}', 'SubCategoriesController@destroy')->name('sub_categories.destroy');
            // });
            // ================================== End Sub Categories Routes ============================================ //

            // ================================== Begin Brands Routes ========================================== //
            Route::group(['prefix' => ''], function () {
                Route::resource('brands', 'BrandsController')->except('show');
                Route::get('brands/{id}', 'BrandsController@destroy')->name('brands.destroy');
            });
            // ================================== End Brands Routes ============================================ //

            // ================================== Begin Tags Routes ========================================== //
            Route::group(['prefix' => ''], function () {
                Route::resource('tags', 'TagsController')->except('show');
                Route::get('tags/{id}', 'TagsController@destroy')->name('tags.destroy');
            });
            // ================================== End Tags Routes ============================================ //

            // ================================== Begin Products ========================================== //
            Route::group(['prefix' => 'products'], function () {
                Route::get('/', 'ProductsController@index')->name('admin.products');
                Route::get('general-information', 'ProductsController@create')->name('products.general.create');
                Route::post('store-general-information', 'ProductsController@store')->name('products.general.store');
            });
            // ================================== End Products ============================================ //

        });

        Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {

            Route::get('login', 'LoginController@login')->name('admin.login');
            Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
        });
    }
);
