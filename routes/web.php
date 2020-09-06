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

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/orders', 'OrderController@index')->name('admin-orders');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});




Route::group(['prefix' => 'basket'], function () {
    Route::post('/add/{id}', 'BasketController@basketAdd')->name('basket-add');

    Route::group([
        'middleware' => 'basket_not_empty',
    ], function () {
        Route::get('/', 'BasketController@basket')->name('basket');
        Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
        Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
        Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
    });
});

Route::get('/', 'MainController@index')->name('index');
//Route::get('/categories', 'MainController@categories')->name('categories');

//Route::get('/basket', 'BasketController@basket')->name('basket');
//Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
//Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
//Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
//Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');


Route::get('/{catalog}', 'MainController@catalog')->name('catalog');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');
