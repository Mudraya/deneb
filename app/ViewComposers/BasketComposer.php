<?php


namespace App\ViewComposers;

use Illuminate\View\View;

class BasketComposer
{
    public function compose(View $view)
    {
        $order = session('order');
        $view->with('order', $order);
    }
}
