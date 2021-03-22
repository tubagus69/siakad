<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pembayaran Listrik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?> ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?> ">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/morris.js/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/jvectormap/jquery-jvectormap.css');?> ">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <!-- jQuery 3 -->
<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js');?>"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pembayaran</b>Listrik</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
                $id = $this->session->userdata('IDUSER');
                $query = "SELECT * from user where IDUSER='$id'";
                $cek = $this->db->query($query)->row();
              ?>
              <?php if($cek->FOTO){?>
                <img src=" <?php echo base_url($cek->FOTO)?> " class="user-image" alt="User Image">
              <?php }else{ ?> 
                <img src=" <?php echo base_url('dist/img/no_images.png')?> " class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs"> <?php echo $cek->NAMA?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if($cek->FOTO){?>
                  <img src=" <?php echo base_url($cek->FOTO)?> " class="img-circle" alt="User Image">
                <?php }else{ ?> 
                  <img src=" <?php echo base_url('dist/img/no_images.png')?> " class="img-circle" alt="User Image">
                <?php } ?>

                <p>
                  <?php echo $cek->NAMA?>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('petugas/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('petugas/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if($cek->FOTO){?>
                <img src=" <?php echo base_url($cek->FOTO)?> " class="img-circle" alt="User Image">
              <?php }else{ ?> 
                <img src=" <?php echo base_url('dist/img/no_images.png')?> " class="user-image" alt="User Image">
              <?php } ?>
        </div>
        <div class="pull-left info">
          <p> <?php echo $cek->NAMA?></p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo site_url('petugas')?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('petugas/data_penggunaan')?>">
            <i class="fa fa-edit"></i> <span>Data Penggunaan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('petugas/data_pelanggan')?>">
            <i class="fa fa-table"></i> <span>Data Pelanggan</span>
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo site_url('petugas/tagihan_pelanggan')?>">
            <i class="fa fa-table"></i> <span>tagihan Pelanggan</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo site_url('petugas/filter_laporan')?>">
            <i class="fa fa-folder"></i> <span>Laporan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('petugas/logout')?>">
            <i class="fa fa-share"></i> <span>Logout</span>
            </span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
        <?php $this->load->view($halaman)?>

</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=" <?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js')?> "></script>
<!-- Morris.js charts -->
<script src=" <?php echo base_url('bower_components/raphael/raphael.min.js')?> "></script>
<script src=" <?php echo base_url('bower_components/morris.js/morris.min.js')?> "></script>
<!-- Sparkline -->
<script src=" <?php echo base_url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?> "></script>
<!-- jvectormap -->
<script src=" <?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?> "></script>
<script src=" <?php echo base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?> "></script>
<!-- jQuery Knob Chart -->
<script src=" <?php echo base_url('bower_components/jquery-knob/dist/jquery.knob.min.js')?> "></script>
<!-- daterangepicker -->
<script src=" <?php echo base_url('bower_components/moment/min/moment.min.js')?> "></script>
<script src=" <?php echo base_url('bower_components/bootstrap-daterangepicker/daterangepicker.js')?> "></script>
<!-- datepicker -->
<script src=" <?php echo base_url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?> "></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=" <?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?> "></script>
<!-- Slimscroll -->
<script src=" <?php echo base_url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?> "></script>
<!-- FastClick -->
<script src=" <?php echo base_url('bower_components/fastclick/lib/fastclick.js')?> "></script>
<!-- AdminLTE App -->
<script src=" <?php echo base_url('dist/js/adminlte.min.js')?> "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" <?php echo base_url('dist/js/pages/dashboard.js')?> "></script>
<!-- AdminLTE for demo purposes -->
<script src=" <?php echo base_url('dist/js/demo.js')?> "></script>
<!-- DataTables -->
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js') ?> "></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?> "></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
