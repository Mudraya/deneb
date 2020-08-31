<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function catalog($code) {
        $current_category = Category::where('code', $code)->first();
        $categories = Category::get();
        return view('catalog', compact('current_category','categories'));
    }

    public function product($category, $product = null) {
        return view('product');
    }
}
