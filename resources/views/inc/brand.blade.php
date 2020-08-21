<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Our Brands</h3>
	</header><!-- sect-heading -->

	<div class="row">
		@foreach($brands as $brand)
		<div class="col-md-2 col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{$brand->image}}"></a>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		@endforeach
	</div> <!-- row.// -->
</div><!-- container // -->