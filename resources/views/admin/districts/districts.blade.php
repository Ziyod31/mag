@extends('layouts.admin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">List of Districts</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('districts.create') }}" class="btn btn-success">Add new district</a></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>City</th>
						<th>Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($districts as $district)
					<tr>
						<td>{{ $district->id }}</td>
						<td>{{ $district->city->name }}</td>
						<td>{{ $district->name }}</td>
						<td>
							<a href="{{ route('cities.edit', $district) }}" class="btn btn-warning">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('districts.destroy', $district) }}" onsubmit="return confirm('Are your sure?')" >
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