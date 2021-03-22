<!-- <h1>Tambah Penggunaan</h1>

<form method="post" action="<?php echo site_url('petugas/tambah_penggunaan') ?>">
	Nama Pelanggan 
	<select name="idpelanggan">
		<?php 
			foreach ($pelanggan as $key) { ?>
				<option value="<?php echo $key->IDPELANGGAN;?>" ><?php echo $key->NAMA;?></option>
			<?php }
		?>	
	</select><br>
	Bulan 
	<select name="bulan">
		<option>Pilih Bulan</option>
		<option value="1">Januari</option>
		<option value="2">Februari</option>
		<option value="3">Maret</option>
		<option value="4">April</option>
		<option value="5">Mei</option>
		<option value="6">Juni</option>
		<option value="7">Juli</option>
		<option value="8">Agustus</option>
		<option value="9">September</option>
		<option value="10">Oktober</option>
		<option value="11">November</option>
		<option value="12">Desember</option>
	</select><br>
	Tahun 
	<select name="tahun">
		<option>Pilih Tahun</option>
		<?php for ($i=2000; $i <= date('Y') ; $i++) { ?> 
			<option value="<?php echo $i ?>" ><?php echo $i ?></option>	
		<?php }?>
	</select><br>
	Meter Awal <input type="text" name="awal"><br>
	Meter Akhir <input type="text" name="akhir"><br>
	<input type="submit" value="Simpan">
	<a href="<?php echo site_url('petugas/data_pelanggan') ?>"><input type="button" value="Kembali"></a>
</form>
 -->

       <section class="content-header">
      <h1>
        Tambah Penggunaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a>Data Penggunaan</li>
        <li class="active">Tambah Data Penggunaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo site_url('petugas/tambah_penggunaan') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <select name="idpelanggan" class="form-control">
                    <?php 
						foreach ($pelanggan as $key) { ?>
							<option value="<?php echo $key->IDPELANGGAN;?>" ><?php echo $key->NAMA;?></option>
						<?php }
					?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Bulan</label>
                  <select name="bulan" class="form-control">
					           <?php foreach ($bulan as $key) { ?>
                  <option value="<?php echo $key->ID ?>"> <?php echo $key->NAMA ?> </option>
                <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <select name="tahun" class="form-control">
					<?php for ($i=2018; $i <= date('Y'); $i++) { ?> 
						<option value="<?php echo $i ?>" ><?php echo $i ?></option>	
					<?php }?>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Meter Awal</label>
                  <input type="text" name="awal" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Meter Akhir</label>
                  <input type="text" name="akhir" class="form-control">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo site_url('petugas/data_Penggunaan') ?>"><button type="button" class="btn btn-info">Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>