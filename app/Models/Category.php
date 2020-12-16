<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Category extends Model implements Searchable
{
	protected $fillable = ['name','parent_id'];

	protected $guarded = [];

	public function getSearchresult(): SearchResult
    {

        return new SearchResult(
            $this,
            $this->name,
        );
    }
	
	public function products()
	{
		return $this->hasMany(Product::class, 'product_id');
	}

	public function parent()
	{
		return $this->belongsTo(static::class, 'parent_id');
	}
	
	public function children()
	{
		return $this->hasMany(static::class, 'parent_id');
	}
}