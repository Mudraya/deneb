<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index() {
        $order = $this->getBasket();
        $categories = $this->getCategories();
        return view('index', compact('categories', 'order'));
    }

    public function catalog($code) {
        $current_category = Category::where('code', $code)->first();
        $order = $this->getBasket();
        $categories = $this->getCategories();
        return view('catalog', compact('current_category','categories', 'order'));
    }

    public function product($category, $productId = null) {
        $category = Category::where('code', $category)->first();
        $order = $this->getBasket();
        $categories = $this->getCategories();
        $product = Product::where('code', $productId)->first();
        return view('product', compact('categories', 'order', 'product', 'category'));
    }
}
