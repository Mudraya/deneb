<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $categories = $this->getCategories();
        $order = (new Basket())->getOrder();
        return view('basket', compact('order', 'categories'));
    }

    public function basketConfirm(Request $request)
    {
        if ((new Basket())->saveOrder($request->name, $request->phone)) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flash('warning', 'Товар не доступен для заказа в полном объеме');
        }

        Order::eraseOrderSum();

        return redirect()->route('index');
    }

    public function basketAdd(Product $product)
    {
        $result = (new Basket(true))->addProduct($product);

        if ($result) {
            session()->flash('success', 'Добавлен товар '.$product->name);
        } else {
            session()->flash('warning', 'Товар '.$product->name . ' в большем кол-ве не доступен для заказа');
        }

        return back();
    }

    public function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);
        session()->flash('warning', 'Удален товар  ' . $product->name);

        return back();
    }

}
