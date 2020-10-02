<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        return Product::get()->toArray();
//            ->available()
//            ->get();
//            ->append('product_name');
    }
}
