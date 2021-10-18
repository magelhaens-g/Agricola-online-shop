<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align:center">
      <span class="brand-text font-weight-light">Admin Agricola</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>Product</p>
            </a>
          </li>   
          <li class="nav-item">
            <a href="{{ route('admin.buy.index') }}" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>Purchase History</p>
            </a>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>