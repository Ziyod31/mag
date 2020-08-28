<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use Symfony\Component\HttpFoundation\getQueryString;

class SearchController extends Controller
{
	public function search(Request $request)
	{
		$searchResults = (new Search())
		->registerModel(Product::class, 'name', 'description')
		->perform($request->input('query'));

		return view('pages.shop', compact('searchResults', 'request'));
	}

	public function index(ProductsRequest $request)
	{

		$productsQuery = Product::with(['brand','category']);

		if ($request->filled('price_from')) {
			$productsQuery->where('price', '>=', $request->price_from);
		}

		if ($request->filled('price_to')) {
			$productsQuery->where('price', '<=', $request->price_to);
		}

		$fields = ['category_id', 'brand_id'];

		foreach($fields as $field) {
			if($request->has($field)) {
				$productsQuery->$field();
			}
		}

		$products = $productsQuery->paginate(12)->withPath("?".$request->getQueryString());

		return view('pages.products', compact('products', 'request'));
	}
}