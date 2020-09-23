<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['parent_id'];
	
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