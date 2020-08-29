@extends('layouts.main')

@section('content')
<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
	<div class="container">
		<h2 class="title-page">Category products</h2>
		<nav>
			<ol class="breadcrumb text-white">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Best category</a></li>
				<li class="breadcrumb-item active" aria-current="page">Great articles</li>
			</ol>  
		</nav>
	</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
	<div class="container">

		<div class="row">
			<aside class="col-md-3">

				<div class="card">
					@include('inc.aside')
				</div> <!-- card.// -->

			</aside> <!-- col.// -->
			<main class="col-md-9">

				<header class="border-bottom mb-4 pb-3">
					<div class="form-inline">
						<span class="mr-md-auto">{{$products->count()}}</span>
						<form method="get">
						<select class="mr-2 form-control" name="sortBy" onchange="this.form.submit()">
							<option value="name_asc">Sort by Name(A-Z)</option>
							<option value="name_desc">Sort by Name(Z-A)</option>
							<option value="price_asc">Sort by Price(ASC)</option>
							<option value="price_desc">Sort by Price(DESC)</option>
							<input type="hidden" name="sort_name" value="sortBy">
						</select>
						@csrf
						</form>
					</div>
				</header><!-- sect-heading -->

				<div class="row">
					@foreach($products as $product)
					<div class="col-md-4">
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
				</div> <!-- row end.// -->


				<nav class="mt-4" aria-label="Page navigation sample">
					<ul class="pagination">
						{{$products->links()}}
					</ul>
				</nav>

			</main> <!-- col.// -->

		</div>

	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection