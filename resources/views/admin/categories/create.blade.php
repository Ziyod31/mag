@extends('layouts.admin')
@isset($category)

@section('title', 'Edit category'.'_'.$category->name)

@else

@section('title', 'Create category')

@endisset
@section('content')

<div class="col-md-12">
	@isset($category)
	
	<h1>Edit category - <b>{{ $category->name }}</b></h1>
	@else
	<h1>Add Category</h1>
	@endisset

	<form method="post" enctype="multipart/form-data"
	@isset($category)
	action="{{ route('categories.update', $category) }}"
	@else
	action="{{ route('categories.store') }}"
	@endisset 
	>
	@isset($category)
	@method('PUT')
	@endisset
	@csrf
	<div class="form-row">
		<div class="col">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" value="{{ old('name', isset($category) ? $category->name : null) }}">
		</div>
		<div class="form-group">
			<label for="category_id">Parent Category:</label>
			<select class="form-control" id="parent_id" name="parent_id">
				<option value="0">Choose...</option>
				@foreach($categories as $category)
				<option value="{{ $category->id }}"
					@isset($category)
					@if($category->parent_id == $category->id)
					selected
					@endif
					@endisset
					>{{ $category->name }}
				</option>
				@endforeach
			</select>
		</div>

		<div class="mb3">
			<label for="image" class="form-label">Image:</label>
			<input type="file" class="form-control" id="image" name="image" value="@isset($category) {{$category->image}} @endisset">
		</div>
	</div>

	<button type="submit" class="btn btn-success">Save</button>

</form>
</div>
@endsection