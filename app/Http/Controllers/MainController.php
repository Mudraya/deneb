<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{

    public function index() {
        return view('index');
    }

    public function catalog($code, ProductsFilterRequest $request) {
        $current_category = Category::where('code', $code)->first();

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

        return view('catalog', compact('current_category', 'products'));
    }

    public function product($category, $productCode)
    {
        $category = Category::where('code', $category)->firstOrFail();
        $product = Product::withTrashed()->byCode($productCode)->first();
        return view('product', compact( 'product', 'category'));
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
        $availableLocales = ['RU', 'EN'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }
}
