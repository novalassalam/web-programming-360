<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
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
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/daterangepicker/daterangepicker-bs3.css') ;?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ;?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<div class="container">
     <div class="row" style="padding-top: 50px;">
    <div class="col-6 mx-auto">
      <!-- Horizontal Form -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
          <?php echo $this->session->flashdata('notif'); ?>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url('Login/proses');?>" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">Remember me</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
      <!-- general form elements disabled -->

      <!-- /.card -->
    </div>
  </div>
</div>
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
</body>
</html>