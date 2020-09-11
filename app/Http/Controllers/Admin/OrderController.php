<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = $this->getBasket();
        $categories = $this->getCategories();
        $orders = Order::where('status', 1)->paginate(10);
        return view('auth.orders.index', compact('orders', 'oreder', 'categories'));
    }


    public function show(Order $order)
    {
        $products = $order->products()->withTrashed()->get();
        return view('auth.orders.show', compact('order', 'products'));
    }
}
