<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Brand;
use App\Models\Category;
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
		$brands = Brand::all();

		$categories = Category::all();

		$productsQuery = Product::with(['brand','category']);

		if ($request->filled('price_from')) {
			$productsQuery->where('price', '>=', $request->price_from);
		}

		if ($request->filled('price_to')) {
			$productsQuery->where('price', '<=', $request->price_to);
		}

		foreach(['category_id','brand_id'] as $field) {
			if(!empty($request->$field)) {
				$productsQuery->where($field, '=', $request->$field);
			}
		}
		
		$products = $productsQuery->paginate(12)->withPath("?".$request->getQueryString());
		
		return view('pages.products', compact('products', 'request', 'brands', 'categories'));
	}

	public function brandCategory()
	{
		
	}
}		