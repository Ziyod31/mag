<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::all();
		return view('admin.products.products')->with('products', $products);
	}

	public function create()
	{
		$categories = Category::get();
		$brands = Brand::get();

		return view('admin.products.create', compact('categories', 'brands'));
	}

	public function store(ProductsRequest $request)
	{

		// Get filename with extension
		$filenameWithExt = $request->file('image')->getClientOriginalName();
      // Get just the filename
		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get extension
		$extension = $request->file('image')->getClientOriginalExtension();
      // Create new filename
		$filenameToStore = $filename.'_'.time().'.'.$extension;
      // Upload image
		$path= $request->file('image')->storeAs('public/products/img/', $filenameToStore);
		
		$product = new Product();
		$product->image = $path;
		$product = $request->all();


		$product->save();

		return redirect()->route('products.index');
	}

	public function show(Product $product)
	{
		return view('admin.products.show', compact('product'));
	}

	public function edit(Product $product)
	{
		$categories = Category::get();
		$brands = Brand::get();

		return view('admin.products.create', compact('product','categories', 'brands'));
	}
}