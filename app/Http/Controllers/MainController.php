<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function catalog($code) {
//        $category = Category::where('code', $code)->first();
        return view('catalog');
    }

    public function product($category, $product = null) {
        return view('product');
    }
}
