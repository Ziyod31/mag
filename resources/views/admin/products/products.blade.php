@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-2 text-gray-800">List of Products</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('products.create') }}" class="btn btn-success">Add new product</a></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Brand</th>
						<th>Category</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Image</th>
						<th>Discount</th>
						<th>Operations</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td><a href="{{ route('products.show', $product .'-') }}">{{$product->brand->name}}</a></td>
						<td>{{$product->category->name}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->price}}$</td>
						<td>{{$product->quantity}}</td>
						<td class="card card-wrap" style="max-width: 100px;"><img src="{{ Storage::url($product->image) }}" alt=""></td>
						<td>{{$product->discount}}%</td>
						<td>
							<a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Are your sure?')" >
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