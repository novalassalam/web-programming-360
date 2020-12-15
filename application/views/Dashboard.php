<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" plugins/font-awesome/css/font-awesome.min.css';?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/font-awesome/css/font-awesome.min.css') ;?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/dist/css/adminlte.min.css') ;?> ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/morris/morris.css') ;?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ;?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/datepicker/datepicker3.css') ;?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin//plugins/datatables/dataTables.bootstrap4.min.css') ;?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/daterangepicker/daterangepicker-bs3.css') ;?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ;?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url();?>" class="nav-link">Home</a>
        </li>
        
      </ul>



  
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="<?php echo base_url('assets/Template/admin/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">PW 2020</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo base_url('assets/Template/admin/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $this->session->userdata('data_login')['log_nama'];?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Welcome/user')?>" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Welcome/grafik')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>grafik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Tes/api')?>" class="nav-link"target="_blank">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Penghasil Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Welcome/crul')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Get Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Tes/eksekusi_post')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Post Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Tes/eksekusi_delete')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Delete Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Tes/eksekusi_put')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>PUT Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Welcome/ajax')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Jquery Ajax</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Coba')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>HMVC</p>
                </a>
              </li>
            </ul>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('Login/logout');?>">Logout</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php $this->load->view($page);?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="#">M.NAUFAL | 2020</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/Template/admin/plugins/jquery/jquery.min.js') ;?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/Template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ;?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/morris/morris.min.js') ;?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/Template/admin/plugins/sparkline/jquery.sparkline.min.js') ;?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ;?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/Template/admin/plugins/knob/jquery.knob.js') ;?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/daterangepicker/daterangepicker.js') ;?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/Template/admin/plugins/datepicker/bootstrap-datepicker.js') ;?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/Template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ;?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/Template/admin/plugins/slimScroll/jquery.slimscroll.min.js') ;?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/Template/admin/plugins/fastclick/fastclick.js') ;?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/Template/admin/dist/js/adminlte.js') ;?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/Template/admin/dist/js/pages/dashboard.js') ;?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/Template/admin/dist/js/demo.js') ;?>"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/datatables/jquery.dataTables.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/datatables/dataTables.bootstrap4.min.js') ;?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
