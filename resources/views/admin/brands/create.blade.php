@extends('layouts.admin')
@isset($brand)

@section('title', 'Edit brand'.'_'.$brand->name)

@else

@section('title', 'Create brand')

@endisset
@section('content')

<div class="col-md-12">
	@isset($brand)
	
	<h1>Edit brand - <b>{{ $brand->name }}</b></h1>
	@else
	<h1>Add Brand</h1>
	@endisset

	<form method="post" enctype="multipart/form-data"
	@isset($brand)
	action="{{ route('brands.update', $brand) }}"
	@else
	action="{{ route('brands.store') }}"
	@endisset 
	>
	@isset($brand)
	@method('PUT')
	@endisset
	@csrf
	<div class="form-row">
		<div class="col">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" value="{{ old('name', isset($brand) ? $brand->name : null) }}">
		</div>
		<div class="col">
			<label for="image" class="form-label">Image:</label>
			<input type="file" class="form-control" id="image" name="image" value="@isset($brand) {{$brand->image}} @endisset">
		</div>
	</div>
	<button type="submit" class="btn btn-success">Save</button>
</form>
</div>
@endsection