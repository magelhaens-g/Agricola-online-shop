<nav class="main-header navbar navbar-expand navbar-light navbar-gray-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" style="color:white"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- User -->
      <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white">
        <span class="hidden-xs">{{ auth()->user()->name }}</span>
      </a>
      <ul class="dropdown-menu" style="width: 30px !important">
        <li class="user-footer">
          <div class="">
            <a href="href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-block btn-default btn-flat">Sign Out</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
      </li>
      <li class="nav-item">
        <div style="width:100px"></div>
      </li>
    </ul>
  </nav>