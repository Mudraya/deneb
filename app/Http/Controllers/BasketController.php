<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function basketAdd(Product $product)
    {
        $result = (new Basket(true))->addProduct($product);

        if ($result) {
            session()->flash('success_bask', __('basket.added').$product->__('name'));
        } else {
            session()->flash('warning_bask', $product->__('name') . __('basket.not_available_more'));
        }

        return back();
    }

    public function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);
        session()->flash('warning_bask', __('basket.removed') . $product->__('name'));

        return back();
    }

    public function basketDelete(Product $product)
    {
        (new Basket())->deleteProduct($product);
        session()->flash('warning_bask', __('basket.removed') . $product->__('name'));

        return back();
    }

}
