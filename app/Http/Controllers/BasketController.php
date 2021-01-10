<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Http\Requests\OrderRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class BasketController extends Controller
{
    public function basket()
    {
        return view('basket');
    }

    public function basketConfirm(OrderRequest $request)
    {
        $email = Auth::check() ? Auth::user()->email : $request->email;
        if ((new Basket())->saveOrder($request->name, $request->phone, $email)) {
            session()->flash('success', __('basket.you_order_confirmed'));
        } else {
            session()->flash('warning', __('basket.you_cant_order_more'));
        }

        return redirect()->route('index');
    }

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
