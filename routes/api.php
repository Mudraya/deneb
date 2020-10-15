<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// http://deneb/api/products?api_token=

Route::middleware(['auth:api'])->group(function () {
    Route::get('products', 'Api\ProductController@getProducts');
});

    Route::post('basket/change', 'Api\BasketController@changeProductCount');
    Route::post('basket/add', 'Api\BasketController@addProduct');
    Route::delete('basket/{productCode}', 'Api\BasketController@deleteProduct');
    Route::get('basket', 'Api\BasketController@getBasket');

