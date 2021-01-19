<?php

namespace App\ViewComposers;

use App\Services\CurrencyConversion;
use Illuminate\View\View;

class CurrenciesComposer
{
    public function compose(View $view)
    {
        $currencies = cache()->remember('currency-query', 60*60*24, function () {
            return CurrencyConversion::getCurrencies();
        });
        $view->with('currencies', $currencies);
    }
}
