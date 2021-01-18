<?php


namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $categories = cache()->remember('category-query', 60*60*24, function () {
            return Category::get();
        });
        $view->with('categories', $categories);
    }
}
