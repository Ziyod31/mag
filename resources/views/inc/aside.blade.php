<form method="GET">

	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Categories</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
			<div class="card-body">
				
				@foreach($categories as $category)
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="category_id[]" value="{{ $category->id }}">
					<div class="custom-control-label">{{$category->name}}</div>
				</label>
				@endforeach

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Brands</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_2" style="">
			<div class="card-body">
				@foreach($brands as $brand)
				<label class="custom-control custom-checkbox">	
					<input type="checkbox" class="custom-control-input" name="brand_id[]" value="{{ $brand->id }}">
					<div class="custom-control-label">{{$brand->name}}</div>
				</label>
				@endforeach
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
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Min</label>
						<input class="form-control" name="price_from" id="price_from" placeholder="$0" type="number" value="{{ $request->price_from }}">
					</div>
					<div class="form-group text-right col-md-6">
						<label>Max</label>
						<input class="form-control" name="price_to" id="price_to"  placeholder="$1,0000" type="number" value="{{ $request->price_to}}">
					</div>
				</div> <!-- form-row.// -->
				<button type="submit" class="btn btn-block btn-primary">Apply</button>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	
</form>