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
						<span class="mr-md-auto">32 Items found </span>
						<select class="mr-2 form-control">
							<option>Latest items</option>
							<option>Trending</option>
							<option>Most Popular</option>
							<option>Cheapest</option>
						</select>
					</div>
				</header><!-- sect-heading -->

				<div class="row">
					<div class="col-md-4">
						<figure class="card card-product-grid">
							<div class="img-wrap">
								<img src="bootstrap-ecommerce-html/images/items/5.jpg">
								<span class="topbar">
									<a href="#" class="float-right"><i class="fa fa-heart"></i></a>
									<span class="badge badge-danger"> NEW </span>
								</span>
							</div>
							<figcaption class="info-wrap border-top">
								<a href="#" class="title">Leather Sleeve - Macbook 13’’</a>
								<div class="price-wrap mt-2">
									<span class="price">$1280</span>
									<del class="price-old">$1980</del>
									<a href="#" class="btn btn-sm btn-outline-primary float-right"><i class="fa fa-shopping-cart"></i></a>
								</div> <!-- action-wrap.end -->
							</figcaption>
						</figure> <!-- card // -->
					</div> <!-- col.// -->
				</div> <!-- row end.// -->


				<nav class="mt-4" aria-label="Page navigation sample">
					<ul class="pagination">
						<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>

			</main> <!-- col.// -->

		</div>

	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection