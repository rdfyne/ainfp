<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
        {{-- F/l name --}}
        <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="{{ route('account') }}" class="dropdown-item">
          <i class="fas fa-user mr-2"></i>
          Account
        </a>
        <div class="dropdown-divider"></div>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer"
        onclick="event.preventDefault();
                confirm('Are you sure to logout') ? document.getElementById('logout-form').submit() : NaN">
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<form action="{{ route('logout') }}" method="POST" id="logout-form">
  @csrf
</form>
