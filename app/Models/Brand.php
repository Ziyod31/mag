<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Brand extends Model implements Searchable
{
	protected $fillable = ['name'];

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
		return $this->hasMany(Product::class);
	}
}
