<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
  <!-- Nav Item - User Information -->
  <li class="nav-item ">
    <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name}}</span>
      <img class="img-profile rounded-circle" src="{{ Auth::user()->avatar }}">
    </a>
  </li>

  <!-- Nav Item - Messages -->
  <li class="nav-item ">
    <a class="nav-link " href="{{ route('logout') }}" role="button" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
   </a>
 </li>
</ul>