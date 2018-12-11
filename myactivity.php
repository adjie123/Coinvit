<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Fixed Column -->
  <link rel="stylesheet" type="text/css" href="dist/css/column-fixed.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
  .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #ffffff;
  }
  .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
    color: #181717;
    background: #dde0e1;
  }
  .text-white{
    color: #fff 
  }
  .info-box-header{
    font-size: 16px;
    line-height: 16px;
    vertical-align: text-top;
  }
  .bold-font{
    font-weight: bold;
  }
  .content-wrapper{
    background-color: #fff;
  }
  .middle-box{
    margin-top: 55px;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    
  
    <?php 
      include 'menu-header-settings.php';
      include 'menu-sidebar-settings.php'; 
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">    
          <h1>
            Summary
            <small>My Activity</small>
          </h1>
        </div>
        <div class="box-body">
          <!--Three Column Layout-->
          <div class="column-3-left">
            <p class="info-box-header">Username</p>
            <p class="info-box-header">Status</p>
            <p class="info-box-header middle-box">Daily Withdrawal Limit</p>
          </div>

          <div class="column-3-left">
            <p class="info-box-header bold-font">frasindo@gmail.com</p>
            <p class="info-box-header bold-font">Unverified</p>
            <p class="info-box-header bold-font middle-box">0 <span>BTC</span></p>
          </div>
        </div>
      <!-- Box-Content -->
      </div>
      <!-- Box-->
      <div class="box">
        <div class="box-header">
          <h2>USER ACTIVITY</h2>
        </div>
        <div class="box-body">
          <!-- Market History -->
          <table class="table table-hover" id="yth" width="100%" cellspacing="0" style="background-color: #fff;">
            <thead>
              <tr style="background-color: #f4f4f5;">
                <th>TIME STAMP</th>
                <th>ADDRESS</th>
                <th>ACTIVITY</th>
              </tr>
            </thead>
             <tbody>
              <?php
                for ($i=0; $i <20 ; $i++) {?> 
                <tr>
                  <td>12/10/18 23:52:48</td>
                  <td>180.252.126.24</td>
                  <td>LOGIN</td>
                </tr>  
                 <?php
                }
             ?> 
            </tbody>
          </table>
          <!-- End Your History -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>