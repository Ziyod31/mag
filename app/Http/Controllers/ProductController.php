<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
		$params = $request->all();

		unset($params['image']);
		if($request->has('image')) {
			$params['image'] = $request->file('image')->store('products');
		}

		Product::create($params);

		return redirect('/admin/products')->with('success', 'New product successfully added !');
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

	public function update(Request $request, Product $product)
	{
		$params = $request->all();

		unset($params['image']);
		if($request->has('image')) {
			Storage::delete($product->image);
			$params['image'] = $request->file('image')->store('public/products');
		}

		$product->update($params);

		return redirect('/admin/products')->with('success', 'Product successfully edited !');
	}

	public function destroy(Product $product)
	{
		$product->delete();
		return back()->with('success', 'The product was deleted !');
	}
}