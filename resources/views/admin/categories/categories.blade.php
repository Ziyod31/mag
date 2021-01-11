@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-2 text-gray-800">List of Categories</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('categories.create') }}" class="btn btn-success">Add new category</a></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Parent Id</th>
						<th>Parent Name</th>
						<th>Name</th>
						<th>Image</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->parent_id}}</td>
						@if($category->parent_id != NULL)
						<td>{{ $category->parent->name }}</td>
						@else
						<td></td>
						@endif
						<td>{{ $category->name }}</td>
						<td>
							<img class="card card-wrap" style="max-width: 300px;" src="{{ Storage::url($category->image) }}" alt="">
						</td>
						<td>
							<a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('categories.destroy', $category) }}" onsubmit="return confirm('Are your sure?')" >
								@csrf{{ method_field("DELETE") }}
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection