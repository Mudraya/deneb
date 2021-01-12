<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;

class MainController extends Controller
{

    public function index() {

        $popular = Redis::zRevRange('productViews', 0, 3);

        if(sizeof($popular) < 4) {
            for ($i=0; $i < 4-sizeof($popular); $i++) {
                $arr_popular_id[] = rand(0, Product::getNumberOfItemsAttribute());
            }
        }

        foreach($popular as $value) {
            $arr_popular_id[] = str_replace('product-', '', $value);
        }

        $popular_products = Product::whereIn('id', $arr_popular_id)->get();

        return view('index', compact('popular_products'));
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
        Redis::zIncrBy('productViews', 1, 'product-'.$product->id);
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
