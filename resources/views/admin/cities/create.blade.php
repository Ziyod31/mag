@extends('layouts.admin')
@isset($city)

@section('title', 'Edit city'.'_'.$city->name)

@else

@section('title', 'Create city')

@endisset
@section('content')

<div class="col-md-12">
	@isset($city)
	
	<h1>Edit city - <b>{{ $city->name }}</b></h1>
	@else
	<h1>Add city</h1>
	@endisset

	<form method="post" enctype="multipart/form-data"
	@isset($city)
	action="{{ route('cities.update', $city) }}"
	@else
	action="{{ route('cities.store') }}"
	@endisset 
	>
	@isset($city)
	@method('PUT')
	@endisset
	@csrf
	<div class="form-row">
		<div class="col">
			<label for="name">City Name:</label>
			<input type="text" class="form-control" name="name" value="{{ old('name', isset($city) ? $city->name : null) }}">
		</div>
	</div>

	<button type="submit" class="btn btn-success">Save</button>

</form>
</div>
@endsection