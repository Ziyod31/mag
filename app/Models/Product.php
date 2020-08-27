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
    protected $fillable = ['name', 'description'];

    protected $guarded = [];

    public function getSearchresult(): SearchResult
    {
        $url = route('');

        return new SearchResult(
            $this,
            $this->name,
            $this->description,
            $url
        );
    }


    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function orders()
    {
    	return $this->belongsToMany(Order::class, 'orders_products')->withTimestamps();
    }

    public function getNewPriceAttribute()
    {
        return $this->price * (1 - ($this->discount / 100));
    }

}
