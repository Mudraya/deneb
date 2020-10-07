<?php

namespace App\Http\Controllers\Api;

use App\Classes\Basket;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index()
    {
        return view('master');
    }

    public function getBasket(Request $request)
    {
        return response()->json(session('order'));

    }
}
