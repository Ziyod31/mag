@extends('layouts.admin')
@section('content')
<div class="card-header py-3">
	<h6 class="m-0 font-weight-bold text-primary">{{ $product->name}}</h6>
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
					<th>Discount</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->brand->name}}</td>
					<td>{{$product->category->name}}</td>
					<td>{{$product->name}}</td>
					<td>{{$product->description}}</td>
					<td>{{$product->price}}$</td>
					<td>{{$product->quantity}}</td>
					<td>{{$product->discount}}%</td>
					<td class="card card-wrap" style="max-width: 100px;">
						<img src="{{ Storage::url($product->image) }}" alt="">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection