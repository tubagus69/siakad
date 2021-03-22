<!-- <h1>Tarif</h1>
<a href="<?php echo site_url('petugas/cetak_laporan'); ?>">Cetak</a>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Bulan</td>
		<td>Tahun</td>
		<td>Jumlah Meter</td>
		<td>STATUS</td>
	</tr>
	<?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php echo $key->BULAN?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php echo $key->STATUS?></td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="7">Tidak Ada Data</td>
			</tr>
		<?php }
	?>
<table> -->

 <section class="content-header">
      <h1>
        Data Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Laporan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<div class="box">
           <div class="box-header">
              <a target="_BLANK" href="<?php echo site_url('petugas/cetak_laporan'); ?>"> <button type="button" class="btn btn-primary">Cetak</button> </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
						<td>No</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Bulan</td>
						<td>Tahun</td>
						<td>Meter Awal</td>
						<td>Meter Akhir</td>
						<td>Jumlah Meter</td>
						<td>Status</td>
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
					<td><?php $cek = $this->petugas_model->data_bulan_by_id($key->BULAN); echo $cek->NAMA;?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->METERAWAL?></td>
					<td><?php echo $key->METERAKHIR?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php if($key->STATUS == 0){echo "Belum di Bayar";}else{echo "Sudah di Bayar";}?></td>
				</tr>
			<?php }
		}?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
</section>

