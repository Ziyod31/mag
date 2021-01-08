<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use App\Models\getNewPriceAttribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Product extends Model implements Searchable
{
    protected $fillable = ['name','image', 'quantity','discount','price','description', 'category_id', 'brand_id'];

    protected $guarded = [];

    public function getSearchresult(): SearchResult
    {

        return new SearchResult(
            $this,
            $this->name,
            $this->description
        );
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }

    public function orders()
    {
    	return $this->belongsToMany(Order::class, 'orders_products')->withTimestamps();
    }

    public function getNewPriceAttribute()
    {
        return $this->price * (1 - ($this->discount / 100));
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
