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
						<div class="btn-group">
							<a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view"> 
								<i class="fa fa-bars"></i></a>
								<a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view"> 
									<i class="fa fa-th"></i></a>
								</div>
							</div>
						</header><!-- sect-heading -->

						<div class="row">
							<div class="col-md-4">
								<figure class="card card-product-grid">
									<div class="img-wrap"> 
										<span class="badge badge-danger"> NEW </span>
										<img src="images/items/1.jpg">
										<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
									</div> <!-- img-wrap.// -->
									<figcaption class="info-wrap">
										<div class="fix-height">
											<a href="#" class="title">Great item name goes here</a>
											<div class="price-wrap mt-2">
												<span class="price">$1280</span>
												<del class="price-old">$1980</del>
											</div> <!-- price-wrap.// -->
										</div>
										<a href="#" class="btn btn-block btn-primary">Add to cart </a>
									</figcaption>
								</figure>
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