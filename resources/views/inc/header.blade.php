
<nav class="navbar navbar-light p-0 navbar-expand border-bottom">
	<div class="container">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
				<ul class="dropdown-menu small">
					<li><a class="dropdown-item" href="#">EUR</a></li>
					<li><a class="dropdown-item" href="#">AED</a></li>
					<li><a class="dropdown-item" href="#">RUBL </a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Language </a>
				<ul class="dropdown-menu small">
					<li><a class="dropdown-item" href="#">English</a></li>
					<li><a class="dropdown-item" href="#">Arabic</a></li>
					<li><a class="dropdown-item" href="#">Russian </a></li>
				</ul>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li><a href="#" class="nav-link px-2"> <i class="fab fa-facebook"></i> </a></li>
			<li><a href="#" class="nav-link px-2"> <i class="fab fa-instagram"></i> </a></li>
			<li><a href="#" class="nav-link px-2"> <i class="fab fa-twitter"></i> </a></li>
		</ul>
	</div> <!-- container //  -->
</nav>


<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-4">
				<a href="{{ route('index') }}" class="brand-wrap">
					<img class="logo" src="/img/logo.png">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-lg-6 col-sm-12">
				<form action="{{ route('search') }}" class="search">
					<div class="input-group w-100">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="widgets-wrap float-md-right">
					<div class="widget-header  mr-3">
						<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
						<span class="badge badge-pill badge-danger notify">0</span>
					</div>
					@guest
					<div class="widget-header icontext">
						<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
						<div class="text">
							<span class="text-muted">Welcome!</span>
							<div> 
								<a href="/login">Sign in</a> |  
								<a href="/register"> Register</a>
							</div>
						</div>
					</div>
					@endguest
					@auth
					<div class="widget-header icontext">
						@if(auth()->user()->is_admin == 1)
						<a href="{{ route('admin') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
						@else
						<a href="{{ route('profile') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
						@endif
						<div class="text">
							<span class="text-muted">Welcome!</span>
							<div> 
								<span>{{ Auth::user()->name }}</span>
							</div>
						</div>
					</div>
					<div class="widget-header icontext">
						<a href="{{ route('logout') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-power-off"></i></a>
					</div>

					@endauth
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->