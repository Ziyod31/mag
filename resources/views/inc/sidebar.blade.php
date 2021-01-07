@auth
@if(auth()->user()->is_admin == 1)
<li class="nav-item">
	<a class="nav-link" href="index.html">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('orders.index') }}">
		<i class="fas fa-fw fa-shopping-cart"></i>
		<span>Orders</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('products.index') }}">
		<i class="fas fa-fw fa-mobile-alt"></i>
		<span>Products</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('categories.index') }}">
		<i class="fas fa-fw fa-sitemap"></i>
		<span>Categories</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('brands.index') }}">
		<i class="fab fa-fw fa-apple"></i>
		<span>Brands</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('cities.index') }}">
		<i class="fas fa-fw fa-city"></i>
		<span>Cities</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('districts.index') }}">
		<i class="fas fa-fw fa-building"></i>
		<span>Districts</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('users.index') }}">
		<i class="fas fa-fw fa-users"></i>
		<span>Users</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('index') }}">
		<i class="fas fa-fw fa-globe"></i>
		<span>Web Site</span>
	</a>
</li>
@else
<li class="nav-item">
	<a class="nav-link" href="{{ route('profile') }}">
		<i class="fas fa-fw fa-globe"></i>
		<span>Profile</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('index') }}">
		<i class="fas fa-fw fa-globe"></i>
		<span>My Orders</span>
	</a>
</li>
@endif
@endauth