<!-- <h1>Tambah Data Pelanggan</h1>

<form method="post" action="<?php echo site_url('admin/tambah_pelanggan') ?>">
	No Meter <input type="text" name="nometer"><br>
	Nama <input type="text" name="nama"><br>
	Alamat <input type="text" name="alamat"><br>
	Kode Tarif 
	<select name="kode">
		
		<?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>"><?php echo $key->KODETARIF;?></option>
			<?php }
		?>	
	</select><br>
	<input type="submit" value="Simpan">
	<a href="<?php echo site_url('admin/data_pelanggan') ?>"><input type="button" value="Kembali"></a>
</form>
 -->

      <section class="content-header">
      <h1>
        Tambah Data Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a>Data Pelanggan</li>
        <li class="active">Tambah Data Pelanggan</li>
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
            <form method="post" action="<?php echo site_url('admin/tambah_pelanggan') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>No Meter</label>
                  <input type="text" name="nometer" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control">
                </div>
                <!-- <div class="form-group">
                  <label>Kode Tarif</label>
                  <select name="kode" class="form-control">
                    <?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>"><?php echo $key->KODETARIF;?></option>
			<?php }
		?>	
                  </select>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo site_url('admin/data_pelanggan') ?>"><button type="button" class="btn btn-info">Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>