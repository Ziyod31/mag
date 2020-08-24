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
}