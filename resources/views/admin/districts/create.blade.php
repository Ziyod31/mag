@extends('layouts.admin')
@isset($district)

@section('title', 'Edit district'.'_'.$district->name)

@else

@section('title', 'Create district')

@endisset
@section('content')

<div class="col-md-12">
	@isset($district)
	
	<h1>Edit district - <b>{{ $district->name }}</b></h1>
	@else
	<h1>Add district</h1>
	@endisset

	<form method="post"
	@isset($district)
	action="{{ route('districts.update', $district) }}"
	@else
	action="{{ route('districts.store') }}"
	@endisset 
	>
	@isset($district)
	@method('PUT')
	@endisset
	@csrf
	<div class="form-row">
		<div class="col">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" value="{{ old('name', isset($district) ? $district->name : null) }}">
		</div>
		<div class="form-group">
			<label for="city_id">City:</label>
			<select class="form-control" id="city_id" name="city_id">
				<option value="0">Choose...</option>
				@foreach($cities as $city)
				<option value="{{ $city->id }}"
					@isset($district)
					@if($district->city_id == $city->id)
					selected
					@endif
					@endisset
					>{{ $city->name }}
				</option>
				@endforeach
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-success">Save</button>

</form>
</div>
@endsection