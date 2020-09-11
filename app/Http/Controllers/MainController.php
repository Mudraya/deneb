<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index() {
        $order = $this->getBasket();
        $categories = $this->getCategories();
        return view('index', compact('categories', 'order'));
    }

    public function catalog($code, ProductsFilterRequest $request) {
        $current_category = Category::where('code', $code)->first();
        $order = $this->getBasket();
        $categories = $this->getCategories();

        $productsQuery = Product::query();

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        foreach (['hit', 'new'] as $field) {
            if ($request->has($field)) {
                $productsQuery->where($field, 1);
            }
        }

        $productsQuery->where('category_id', $current_category->id);

        if($request->has('page')) {
            $input = $request->except('page');
        } else {
            $input = $request->all();
        }

        $products = $productsQuery->paginate(2)->withPath("?" . http_build_query($input));

        return view('catalog', compact('current_category','categories', 'order', 'products'));
    }

    public function product($category, $productCode)
    {
        $category = Category::where('code', $category)->first();
        $order = $this->getBasket();
        $categories = $this->getCategories();
        $product = Product::withTrashed()->byCode($productCode)->first();
        return view('product', compact('categories', 'order', 'product', 'category'));
    }
}
