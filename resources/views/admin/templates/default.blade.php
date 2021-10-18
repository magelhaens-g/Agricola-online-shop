<!DOCTYPE html>
<html>
@include('admin/templates/partials/head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin/templates/partials/header')
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  
  @include('admin/templates/partials/sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin/templates/partials/footer')
  
  <!-- Control Sidebar -->
  @include('admin/templates/partials/control')
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin/templates/partials/scripts')

</body>
</html>
