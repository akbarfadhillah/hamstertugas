<!DOCTYPE html>
<html>
<head>
  @include('layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('layouts.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="pull-right">
            
          </div>
        </div>
      </div>

      
      @yield('content')

      <!-- modal hapus -->
 



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>(021)</b>7398615 -->
    </div>
    <strong>
      Hai , Akbar!
    </strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('layouts.script')

<script type="text/javascript">
  $(document).ready( function () {
    $('.myTable').DataTable();

    // $('.sync-ulang').click(function(e){
    //   e.preventDefault();
    //   $('#modal-sync').modal();
    // })

} );
</script>

@yield('scripts')
</body>
</html>
