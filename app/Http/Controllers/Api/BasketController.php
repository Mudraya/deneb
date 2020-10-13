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
        return response()->json();

    }

    public function deleteProduct($id)
    {
//        $pivotRow = (new Basket())->getOrder()->products->where('id', $product->id)->first();
//        if ($pivotRow->countInOrder < 2) {
//            $this->order->products->pop($product);
//        } else {
//            $pivotRow->countInOrder--;
//        }
        return response()->json("ok");
    }

    public function changeProductCount(Request $request)
    {
        return response()->json($request);
    }
}
