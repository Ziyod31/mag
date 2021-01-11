<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::all();
		return view('admin.categories.categories')->with('categories', $categories);
	}

	public function create()
	{
		$categories = Category::all();
		return view('admin.categories.create', compact('categories'));
	}

	public function store(CategoryRequest $request)
	{
		$params = $request->all();
		unset($params['image']);
		if ($request->has('image')) {
			$path = $request->file('image')->store('public/categories');
			$params['image'] = $path;
		}

		Category::create($params);
		return redirect()->route('categories.index')->with('success', 'New Category was created successfully!');
	}

	public function edit(Category $category)
	{
		$categories = Category::get();
		return view('admin.categories.create', compact('category', 'categories'));
	}

	public function update(CategoryRequest $request, Category $category)
	{
		$params = $request->all();

		unset($params['image']);
		if($request->has('image')) {
			Storage::delete($category->image);
			$params['image'] = $request->file('image')->store('public/categories');
		}

		$category->update($params);

		return redirect()->route('categories.index')->with('success', 'Category was successfully edited');
	}

	public function destroy(Category $category)
	{
		if(Storage::delete($category->image)){
			$category->delete();
		}
		return back()->with('success', 'The Category was deleted');
	}
}
