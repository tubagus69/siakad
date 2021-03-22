<!-- <h1>Data Tagihan</h1>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Bulan</td>
		<td>Tahun</td>
		<td>Jumlah Meter</td>
		<td>Status</td>
		<td>Action</td>
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
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php echo $key->STATUS?></td>
					<td>
						<a href="<?php echo site_url();?>">Bayar</a>
					</td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="5">Tidak Ada Data</td>
			</tr>
		<?php }
	?>
<table> -->


<section class="content-header">
      <h1>
        Data Tagihan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Tagihan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	               <tr>
						<td>No</td>
						<td>Nama</td>
						<td>Bulan</td>
						<td>Tahun</td>
						<td>Jumlah Meter</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
                </thead>
                <tbody>
              <?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php $cek = $this->pengguna_model->data_pelanggan(); echo $cek->NAMA;?></td>
					<td><?php $cek1 = $this->pengguna_model->data_bulan_by_id($key->BULAN); echo $cek1->NAMA?>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php if($key->STATUS == 0){echo "Belum Bayar";}else{echo "Sudah Bayar";}?></td>
					<td>
						<a href="<?php echo site_url('pengguna/bayar_tagihan/'.$key->IDTAGIHAN);?>">Bayar</a>
					</td>
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
