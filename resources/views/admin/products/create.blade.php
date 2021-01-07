@extends('layouts.admin')
@isset($category)

@section('title', 'Edit product'.'_'.$product->name)

@else

@section('title', 'Create product')

@endisset
@section('content')

<div class="col-md-12">
	@isset($product)
	
	<h1>Edit product - <b>{{ $product->name }}</b></h1>
	@else
	<h1>Add Product</h1>
	@endisset

	<form method="post" enctype="multipart/form-data"
	@isset($product)
	action="{{ route('products.update', $product) }}"
	@else
	action="{{ route('products.store') }}"
	@endisset 
	>
	@isset($product)
	@method('PUT')
	@endisset
	@csrf
	<div class="form-row">
		<div class="col-md-6">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" value="{{ old('name', isset($product) ? $product->name : null) }}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group">
			<label for="category_id">Category:</label>
			<select class="form-control" id="category_id" name="category_id">
				@foreach($categories as $category)
				<option value="{{ $category->id }}"
					@isset($product)
					@if($product->category_id == $category->id)
					selected
					@endif
					@endisset
					>{{ $category->name }}
				</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="brand_id">Brand:</label>
			<select class="form-control" id="brand_id" name="brand_id">
				@foreach($brands as $brand)
				<option value="{{ $brand->id }}"
					@isset($product)
					@if($product->brand_id == $brand->id)
					selected
					@endif
					@endisset
					>{{ $brand->name }}
				</option>
				@endforeach
			</select>
		</div>

		<div class="col">
			<label for="price">Price:</label>
			<input type="text" class="form-control" name="price" value="{{ old('price', isset($product) ? $product->price : null) }}">
		</div>

		<div class="col">
			<label for="quantity">Quantity:</label>
			<input type="text" class="form-control" name="quantity" value="{{ old('quantity', isset($product) ? $product->quantity : null) }}">
		</div>

		<div class="col">
			<label for="discount">Discount:</label>
			<input type="text" class="form-control" name="discount" value="{{ old('discount', isset($product) ? $product->discount : null) }}">
		</div>

		<div class="mb3">
			<label for="image" class="form-label">Image:</label>
			<input type="file" class="form-control" id="image" name="image" value="@isset($product) {{$product->image}} @endisset">
		</div>
	</div>

	<div class="form-group">
		<label for="description">Описание:</label>
		<textarea class="form-control" id="description" rows="3" name="description">@isset($product) {{$product->description}} @endisset</textarea>
	</div>

	<button type="submit" class="btn btn-success">Save</button>

</form>
</div>
@endsection