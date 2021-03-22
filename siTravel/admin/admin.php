<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['namalengkap'])){
		die("anda belum login");}
	else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Halaman Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="admin.php?page2=editpass">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

     

           

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu Administrator</li>
                        <li><a class="ajax-link" href="admin.php?page2=home"><i class="glyphicon glyphicon-home"></i><span> Beranda</span></a></li>
                        
						<li><a class="ajax-link" href="admin.php?page2=tampil_karyawan"><i class="glyphicon glyphicon-user"></i><span> Karyawan</span></a></li>
                        
						<li><a class="ajax-link" href="admin.php?page2=tampil_pengemudi"><i class="glyphicon glyphicon-user"></i><span> Pengemudi</span></a></li>
                       
					    <li><a class="ajax-link" href="admin.php?page2=pelanggan"><i class="glyphicon glyphicon-user"></i><span> Pelanggan</span></a></li>
  					    
						<li><a class="ajax-link" href="admin.php?page2=tampil_kendaraan"><i class="glyphicon glyphicon-th"></i><span> Kendaraan</span></a></li>
                        
						<li><a class="ajax-link" href="admin.php?page2=tampil_shift"><i class="glyphicon glyphicon-book"></i><span> Jadwal Shift</span></a></li>
						 											
						<li><a class="ajax-link" href="admin.php?page2=tampil_jadwal"><i class="glyphicon glyphicon-book"></i><span> Jadwal Keberangkatan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=tampil_tujuan"><i class="glyphicon glyphicon-book"></i><span> Tujuan Keberangkatan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=tampil_tanggal"><i class="glyphicon glyphicon-book"></i><span> Tanggal Keberangkatan</span></a></li>
												 
					    <li><a class="ajax-link" href="admin.php?page2=tampil_jam"><i class="glyphicon glyphicon-book"></i><span> Jam Keberangkatan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=tampil_rute"><i class="glyphicon glyphicon-th"></i><span> Rute Perjalanan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=pemesanan"><i class="glyphicon glyphicon-list-alt"></i><span> Laporan Pemesanan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=pemesanan_periode"><i class="glyphicon glyphicon-list-alt"></i><span> Laporan Pemesanan Per Periode</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=editpass"><i class="glyphicon glyphicon-user"></i><span> Edit Profil Perusahaan</span></a></li>
						
						<li><a class="ajax-link" href="admin.php?page2=pesan"><i class="glyphicon glyphicon-inbox"></i><span> Pesan Masuk</span></a></li>
                       
					  
                        
                    </ul>
                   
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
           <?php
			include "konten.php";
			?>


    </div>
   
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row"><br><br><br>
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Sistem Informasi Travel</a> 2017 | All Right Reserved</p>

       
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

<?php } ?>
