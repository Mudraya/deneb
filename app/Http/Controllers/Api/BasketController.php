<?php

namespace App\Http\Controllers\Api;

use App\Classes\Basket;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
//    protected $basket = new Basket();
//        {"currency_id":1,
//        "products":[
//            {"id":4,"category_id":2,
    //        "name":"Коробка \"Розовая мечта\"",
    //        "code":"pink_dream",
    //        "image":"http://deneb/storage/products/pink_dream.webp",
    //        "price":800,"count":3,"name_en":"Box of chocolate \"Pink dream\"",
    //        "countInOrder":1,
    //        "a_href":"http://deneb/chocolate/pink_dream"}],
//        "currencySymbol":"₴",
//        "routePlaceOrder":"http://deneb/basket",
//        "sum":800}



    public function getBasket()
    {
        $order = session('order');
        return response()->json(($order) ? $order->getOrderArray() : []);
    }

    public function deleteProduct($productCode)
    {
        $product = Product::withTrashed()->byCode($productCode)->first();
        (new Basket())->deleteProduct($product);
        $order = session('order');
        return response()->json(($order) ? $order->getOrderArray() : []);
    }

    public function changeProductCount(Request $request)
    {
        $product = Product::withTrashed()->byCode($request->product['code'])->first();
        if($request->step == 1) {
            (new Basket(true))->addProduct($product);
        } else {
            (new Basket(true))->removeProduct($product);
        }
        $order = session('order');
        return response()->json(($order) ? $order->getOrderArray() : []);
    }

    public function addProduct(Request $request)
    {
        $product = Product::withTrashed()->byCode($request->productCode)->first();
        (new Basket(true))->addProduct($product);
        $order = session('order');
        return response()->json(($order) ? $order->getOrderArray() : []);
    }
}
