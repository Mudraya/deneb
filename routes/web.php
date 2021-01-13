<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/import/products', 'Import\ProductsImportController@show');
Route::post('/import/products', 'Import\ProductsImportController@store')->name('import-products-post');

Route::get('locale/{locale}', 'MainController@changeLocale')->name('locale');
Route::get('currency/{currencyCode}', 'MainController@changeCurrency')->name('currency');

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
Route::post('subscription/{product}', 'MainController@subscribe')->name('subscription');

Route::middleware(['set_locale'])->group(function () {
    Route::middleware(['auth'])->group(function () {

        Route::group([
            'prefix' => 'person',
            'namespace' => 'Person',
            'as' => 'person.',
        ], function () {
            Route::get('/orders', 'OrderController@index')->name('orders.index');
            Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
        });

        Route::group([
            'namespace' => 'Admin',
            'prefix' => 'admin',
            'as' => 'admin.'
        ], function () {
            Route::group(['middleware' => 'is_admin'], function () {
                Route::get('/orders', 'OrderController@index')->name('orders.index');
                Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
                Route::resource('categories', 'CategoryController');
                Route::resource('products', 'ProductController');
                Route::resource('merchants', 'MerchantController');
                Route::get('merchant/{merchant}/update_token', 'MerchantController@updateToken')->name('merchants.update_token');
            });
        });

    });

    Route::group(['prefix' => 'basket'], function () {

        Route::post('/change', 'BasketController@changeProductCount');
        Route::post('/add', 'BasketController@addProduct');
        Route::delete('/{productCode}', 'BasketController@deleteProduct');
        Route::get('/get-basket', 'BasketController@getBasket');

        Route::group([
            'middleware' => 'basket_not_empty',
        ], function () {
            Route::get('/', 'BasketController@basket')->name('basket');
            Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
            Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
        });
    });

    Route::get('/', 'MainController@index')->name('index');
    Route::get('reset', 'ResetController@reset')->name('reset');

    Route::get('/{catalog}', 'MainController@catalog')->name('catalog');
    Route::get('/{category}/{product?}', 'MainController@product')->name('product');
});

