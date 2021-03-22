<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cetak Laporan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" <?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css') ?> ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css') ?> ">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?> ">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">

<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-flash"></i> PembayaranListik.
          <small class="pull-right">Date: <?php echo date("Y-m-d") ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
			<td>No</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Bulan</td>
			<td>Tahun</td>
			<td>Jumlah Meter</td>
			<td>STATUS</td>
		  </tr>
          </thead>
          <tbody>
      		<?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php $cek = $this->admin_model->tampil_bulan_by_id($key->BULAN); echo $cek->NAMA?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php if($key->STATUS == 0){echo "Belum di Bayar";}else{echo "Sudah di Bayar";}?></td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="7">Tidak Ada Data</td>
			</tr>
		<?php }
	?>    
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
  </section>
  </div>
<!-- ./wrapper -->
</body>
</html>
