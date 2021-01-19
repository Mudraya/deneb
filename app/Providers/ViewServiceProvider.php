<?php

namespace App\Providers;

use App\Services\CurrencyConversion;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.master', 'index', 'catalog'], 'App\ViewComposers\CategoriesComposer');
        View::composer(['layouts.master', 'auth.layouts.admin_master'], 'App\ViewComposers\CurrenciesComposer');
        View::composer(['layouts.master', 'basket'], 'App\ViewComposers\BasketComposer');

        View::composer('*', function ($view) {
            $currencySymbol = CurrencyConversion::getCurrencySymbol();
            $view->with('currencySymbol', $currencySymbol);
        });
    }
}
