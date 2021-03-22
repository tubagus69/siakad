<!-- <h1>Data Pelanggan</h1>
<table border="1">
	<tr>
		<td>No</td>
		<td>NO Meter</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Kode Tarif</td>
		<td>Action</td>
	</tr>
	<?php 
		if ($data) {
			$no=1;
			foreach ($data as $key) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key->NOMETER?></td>
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php echo $key->KODETARIF; ?></td>
					<td>
						<a href="<?php echo site_url('petugas/update_pelanggan/'.$key->IDPELANGGAN);?>">Edit</a>
					</td>
				</tr>
			<?php }
		}else{?>
			<tr>
				<td colspan="6">Tidak Ada Data</td>
			</tr>
		<?php }
	?>
<table> -->


<section class="content-header">
      <h1>
        Data Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Pelanggan</a></li>
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
						<td>NO Meter</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Kode Tarif</td>
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
					<td><?php echo $key->NOMETER?></td>
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php if($key->KODETARIF=='0'){echo "Kode Tari Belum ada";}else{echo $key->KODETARIF;}?></td>
					<td>
						<a href="<?php echo site_url('petugas/update_pelanggan/'.$key->IDPELANGGAN);?>">Edit</a>
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


