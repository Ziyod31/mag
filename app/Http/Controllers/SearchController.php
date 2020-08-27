<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
	public function search(Request $request)
	{
		$searchResults = (new Search())
		->registerModel(Product::class, 'name', 'description')
		->perform($request->input('query'));

		return view('pages.shop', compact('searchResults'));
	}

	public function index(Request $request, Product $product)
	{

		$product = $product->newQuery();
		if($request->has('category_id')){
			$products->where('category_id', $request->input('category_id'));
		}

		if($request->has('brand_id')){
			$products->where('brand_id', $request->input('brand_id'));
		}

		if($request->has('price_from')){
			$products->where('price_from', $request->input('price_from'));
		}

		if($request->has('price_to')){
			$products->where('price_to', $request->input('price_to'));
		}

		$products = $product->get();

		return view('pages.products', compact('product'));
	}
}