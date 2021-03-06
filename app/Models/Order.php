<?php

namespace App\Models;

use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    protected $fillable = ['user_id', 'currency_id', 'sum', 'countInOrder'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['count', 'price'])->withTimestamps();
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function calculateFullSum()
    {
        $sum = 0;
        foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function getFullSum()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->price * $product->countInOrder;
        }

        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->status = 1;
        $this->sum = $this->getFullSum();

        $products = $this->products;
        $this->save();

        foreach ($products as $productInOrder) {
            $this->products()->attach($productInOrder, [
                'count' => $productInOrder->countInOrder,
                'price' => $productInOrder->price,
            ]);
        }
        session()->forget('order');
        return true;
    }

    /**
     * @return array
     */
    public function getOrderArray()
    {
        $sum = 0;
        $orderArray = $this->toArray();

        $orderArray['currencySymbol'] = CurrencyConversion::getCurrencySymbol();
        $orderArray['routePlaceOrder'] = route('basket');

        for ($i = 0; $i<=array_key_last($orderArray['products']) ; $i++)
        {
            if(array_key_exists($i, $orderArray['products'])) {
                $prod = $this->products->where('id', $orderArray['products'][$i]["id"])->first();
                $orderArray['products'][$i]["countInOrder"] = $prod->countInOrder;
                $orderArray['products'][$i]["image"] = Storage::url($prod->image);
                $orderArray['products'][$i]["a_href"] = route('product', [$prod->category->code, $prod->code]);
                $sum += $orderArray['products'][$i]["price"] * $orderArray['products'][$i]["countInOrder"];
            }
        }

        $orderArray['sum'] = $sum;

        return $orderArray;
    }
}
