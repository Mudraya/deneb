<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;
    protected $fillable = ['code', 'name', 'description', 'image', 'name_en', 'description_en'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getImageAttribute() {
        return $this->attributes['image'] ? $this->attributes['image'] : 'categories/no_image.jpg';
    }
}
