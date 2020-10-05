<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, Translatable;

    protected $fillable = [
        'name', 'code', 'price', 'category_id', 'description', 'image', 'hit', 'new', 'count', 'name_en', 'description_en'
    ];
    protected $visible = ['name', 'name_en', 'count', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount() {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function isHit()
    {
        return $this->hit === 1;
    }

    public function isNew()
    {
        return $this->new === 1;
    }

    public static function countHits()
    {
        return Product::where('hit',1)->count();
    }

    public static function countNews()
    {
        return Product::where('new',1)->count();
    }

    public function scopeHit($query)
    {
        return $query->where('hit', 1);
    }

    public function scopeNew($query)
    {
        return $query->where('new', 1);
    }

    public function scopeByCode($query, $code)
    {
        return $query->where('code', $code);
    }

    public function isAvailable()
    {
        return !$this->trashed() && $this->count > 0;
    }

    public function getPriceAttribute($value)
    {
        return round(CurrencyConversion::convert($value), 2);
    }

    public function scopeAvailable($query)
    {
        return $query->where('count', '>', 0);
    }
}
