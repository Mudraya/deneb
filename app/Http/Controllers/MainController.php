<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        $category = Category::where('code', $category)->firstOrFail();
        $order = $this->getBasket();
        $categories = $this->getCategories();
        $product = Product::withTrashed()->byCode($productCode)->first();
        return view('product', compact('categories', 'order', 'product', 'category'));
    }

    public function subscribe(SubscriptionRequest $request, Product $product)
    {
        Subscription::create([
            'email' => $request->email,
            'product_id' => $product->id,
        ]);

        return redirect()->back()->with('success', __('product.we_will_update'));
    }

    public function changeLocale($locale)
    {
        $availableLocales = ['ru', 'en'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
