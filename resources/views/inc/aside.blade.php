<article class="filter-group">
	<header class="card-header">
		<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
			<i class="icon-control fa fa-chevron-down"></i>
			<h6 class="title">Categories</h6>
		</a>
	</header>
	<div class="filter-content collapse show" id="collapse_2" style="">
		<div class="card-body">
			<label class="custom-control custom-checkbox">
				@foreach($categories as $category)
				<input type="checkbox" checked="" class="custom-control-input">
				<div class="custom-control-label">{{$category->name}}  
					<b class="badge badge-pill badge-light float-right">{{$category->product->count()}}</b>
				</div>
				@endforeach
			</label>
		</div> <!-- card-body.// -->
	</div>
</article> <!-- filter-group  .// -->

<article class="filter-group">
	<header class="card-header">
		<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
			<i class="icon-control fa fa-chevron-down"></i>
			<h6 class="title">Brands </h6>
		</a>
	</header>

	<div class="filter-content collapse show" id="collapse_2" style="">
		<div class="card-body">
			<label class="custom-control custom-checkbox">
				<input type="checkbox" checked="" class="custom-control-input">
				<div class="custom-control-label">Mercedes  
					<b class="badge badge-pill badge-light float-right">120</b>  </div>
				</label>
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->

	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Price range </h6>
			</a>
		</header>

		<div class="filter-content collapse show" id="collapse_3" style="">
			<div class="card-body">
				<input type="range" class="custom-range" min="0" max="100" name="">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Min</label>
						<input class="form-control" placeholder="$0" type="number">
					</div>
					<div class="form-group text-right col-md-6">
						<label>Max</label>
						<input class="form-control" placeholder="$1,0000" type="number">
					</div>
				</div> <!-- form-row.// -->
				<button class="btn btn-block btn-primary">Apply</button>
			</div><!-- card-body.// -->
		</div>
</article> <!-- filter-group .// -->