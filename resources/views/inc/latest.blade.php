<div class="container">

	<header class="section-heading">
		<a href="/products" class="btn btn-outline-primary float-right">See all</a>
		<h3 class="section-title">Latest Products</h3>
	</header><!-- sect-heading -->

	<div class="row">
		@foreach($products as $product)
		<div class="col-md-3 col-sm-6">
			<figure class="card card-product-grid">
				<div class="img-wrap">
					<img src="{{ $product->image}}">
					<span class="topbar">
						<a href="#" class="float-right"><i class="fa fa-heart"></i></a>
						@if($product->discount > 0)
						<span class="badge badge-danger">-{{$product->discount}}%</span>
						@endif
					</span>
				</div>
				<figcaption class="info-wrap border-top">
					<a href="#" class="title">{{$product->name}}</a>
					<div class="price-wrap mt-2">
						@if($product->discount > 0)
						<span class="price">${{$product->new_price}}</span>
						<del class="price-old">${{$product->price}}</del>
						@else
						<span class="price">${{$product->price}}</span>
						@endif
						<a href="#" class="btn btn-sm btn-outline-primary float-right"><i class="fa fa-shopping-cart"></i></a>
					</div> <!-- action-wrap.end -->
				</figcaption>
			</figure> <!-- card // -->
		</div> <!-- col.// -->
		@endforeach
	</div> <!-- row.// -->

</div> <!-- container .//  -->