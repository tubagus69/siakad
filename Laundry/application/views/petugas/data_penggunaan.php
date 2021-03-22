<!-- <h1>Data Penggunaan</h1>
<a href="<?php echo site_url('petugas/insert_penggunaan'); ?>">Tambah</a>
<table border="1">
	<tr>
		<td>No</td>
		<td>Id Pelanggan</td>
		<td>Bulan</td>
		<td>Tahun</td>
		<td>Meter Awal</td>
		<td>Meter Akhir</td>
	</tr>
	<?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->IDPELANGGAN?></td>
					<td><?php echo $key->BULAN?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->METERAWAL?></td>
					<td><?php echo $key->METERAKHIR?></td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="7">Tidak Ada Data</td>
			</tr>
		<?php }
	?>
<table>
 -->


<section class="content-header">
      <h1>
        Data Penggunaan 
        <?php echo $this->session->flashdata('data_penggunaan'); ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Penggunaan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<div class="box">
           <div class="box-header">
              <a href="<?php echo site_url('petugas/insert_penggunaan'); ?>"> <button type="button" class="btn btn-primary">Tambah</button> </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
						<td>No</td>
						<td>Nama</td>
						<td>Bulan</td>
						<td>Tahun</td>
						<td>Meter Awal</td>
						<td>Meter Akhir</td>
					</tr>
                </thead>
                <tbody>
              <?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php $cek1 = $this->petugas_model->tampil_pelanggan_by_id($key->IDPELANGGAN); echo $cek1->NAMA ?></td>
					<td><?php $cek = $this->petugas_model->data_bulan_by_id($key->BULAN); echo $cek->NAMA;?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->METERAWAL?></td>
					<td><?php echo $key->METERAKHIR?></td>
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
