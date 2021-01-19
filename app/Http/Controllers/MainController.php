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

    protected $arr_popular_id;

    public function index() {

        $popular = Redis::zRevRange('productViews', 0, 3);

        if(sizeof($popular) < 4) {
            for ($i=0; $i < 4-sizeof($popular); $i++) {
                $this->arr_popular_id[] = rand(0, Product::getNumberOfItemsAttribute());
            }
        }

        foreach($popular as $value) {
            $this->arr_popular_id[] = str_replace('product-', '', $value);
        }

        $popular_products = cache()->remember('popular-products-query', 60*60*24, function () {
            return Product::whereIn('id', $this->arr_popular_id)->with(['category'])->get();
        });

        return view('index', compact('popular_products'));
    }

    public function catalog($code, ProductsFilterRequest $request) {
        $current_category = Category::where('code', $code)->firstOrFail();

        $productsQuery = Product::query()->with(['category']);

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

        $products = $productsQuery->paginate(3)->withPath("?" . http_build_query($input));

        $countHits = Product::countHits($current_category->id);
        $countNews = Product::countNews($current_category->id);

        return view('catalog', compact('current_category', 'products', 'countHits', 'countNews'));
    }

    public function product($category, $productCode)
    {
        $category = Category::where('code', $category)->firstOrFail();
        $product = Product::withTrashed()->byCode($productCode)->firstOrFail();
        Redis::zIncrBy('productViews', 1, 'product-'.$product->id);
        return view('product', compact( 'product', 'category'));
    }

    public function subscribe(SubscriptionRequest $request, Product $product)
    {
        Subscription::create([
            'email' => $request->email,
            'product_id' => $product->id,
        ]);

        session()->flash('success', __('product.we_will_update', [], session()->get('locale')));
        return redirect()->back();
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
