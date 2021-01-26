@extends('layouts.main')
@section('content')

<section class="section-pagetop bg">
	<div class="container">
		<h2 class="title-page">{{$product->category->name}}</h2>
		<h4>{{$product->brand->name}}</h4>
		<output>
			<div class="card">
				<div class="row no-gutters">
					<aside class="col-md-6">
						<article class="gallery-wrap">
							<div class="img-big-wrap">
								<div> <a href="#"><img src="{{ Storage::url($product->image) }}"></a></div>
							</div>
							<!-- <div class="thumbs-wrap">
								<a href="" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/12.jpg"></a>
								<a href="" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/12-1.jpg"></a>
								<a href="" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/12-2.jpg"></a>
							</div>-->
						</article> <!-- gallery-wrap .end// -->
					</aside>
					<main class="col-md-6 border-left">
						<article class="content-body">

							<h2 class="title">{{ $product->name}}</h2>

							<div class="mb-3">
								<var class="price h4">${{ $product->price }}</var>
								<span class="text-muted">/ {{ $product->quantity }} in stock left</span>
							</div> <!-- price-detail-wrap .// -->

							<p>{{ $product->description }}</p>

							<hr>
							<div class="form-row">
								<div class="form-group col-md flex-grow-0">
									<label>Quantity</label>
									<div class="input-group mb-3 input-spinner">
										<div class="input-group-prepend">
											<button class="btn btn-light" type="button" id="button-plus"> + </button>
										</div>
										<input type="text" class="form-control" value="1">
										<div class="input-group-append">
											<button class="btn btn-light" type="button" id="button-minus"> − </button>
										</div>
									</div>
								</div> <!-- col.// -->
							</div> <!-- row.// -->

							<a href="#" class="btn  btn-primary"> Buy now </a>
							<a href="#" class="btn  btn-outline-primary"> <span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i>  </a>
						</article> <!-- product-info-aside .// -->
					</main> <!-- col.// -->
				</div> <!-- row.// -->
			</div> <!-- card.// -->
		</output>
	</div> <!-- container //  -->
</section>
@endsection