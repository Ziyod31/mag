<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav">

     <li class="nav-item dropdown">
      <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  All category</strong></a>
      
      <div class="dropdown-menu">

        <ul class="menu-category">

          @foreach($categories as $category)          
          @if(count($category->children) > 0)
          <li class="has-submenu"><a href="#">{{$category->name}}</a>
            @else
            <li><a href="#">{{$category->name}}</a></li>
            @endif
            <ul class="submenu">

              @foreach($category->children as $child)
              <li><a href="#">{{$child->name}}</a></li>
              @endforeach

            </ul>
          </li>
          @endforeach
        </ul>


      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Fashion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Supermarket</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Electronics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Baby &amp Toys</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Fitness sport</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Clothing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Furnitures</a>
    </li>
  </ul>
</div> <!-- collapse .// -->
  </div> <!-- container .// -->