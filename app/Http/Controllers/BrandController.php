<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
	public function index()
	{
		$brands = Brand::all();
		return view('admin.brands.brands', compact('brands'));
	}

	public function create()
	{
		$brands = Brand::all();
		return view('admin.brands.create', compact('brands'));
	}

	public function store(BrandRequest $request)
	{
		$params = $request->all();
		unset($params['image']);
		if ($request->has('image')) {
			$path = $request->file('image')->store('public/brands');
			$params['image'] = $path;
		}

		Brand::create($params);
		return redirect()->route('brands.index')->with('success', 'New Brand was created successfully!');
	}

	public function edit(Brand $brand)
	{
		$brands = Brand::get();
		return view('admin.brands.create', compact('brand'));
	}

	public function update(BrandRequest $request, Brand $brand)
	{
		$params = $request->all();

		unset($params['image']);
		if($request->has('image')) {
			Storage::delete($brand->image);
			$params['image'] = $request->file('image')->store('public/brands');
		}

		$brand->update($params);

		return redirect()->route('brands.index')->with('success', 'Brand was successfully edited');
	}

	public function destroy(Brand $brand)
	{
		if(Storage::delete($brand->image)){
			$brand->delete();
		}
		return back()->with('success', 'The Brand was deleted');
	}
}
