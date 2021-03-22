<!-- <h1>Edit Data Pelanggan</h1>

<form method="post" action="<?php echo site_url('admin/edit_pelanggan') ?>">
	<input type="hidden" name="id" value="<?php echo $data->IDPELANGGAN; ?>"><br>
	No Meter <input type="text" name="nometer" value="<?php echo $data->NOMETER; ?>"><br>
	Nama <input type="text" name="nama" value="<?php echo $data->NAMA; ?>"><br>
	Alamat <input type="text" name="alamat" value="<?php echo $data->ALAMAT ?>"><br>
	Kode Tarif 
	<select name="kode">
		
		<?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>" <?php if($data->KODETARIF == $key->KODETARIF){echo "selected=''";}else{echo "";}?> ><?php echo $key->KODETARIF;?></option>
			<?php }
		?>	
	</select><br>
	<input type="submit" value="Simpan">
	<a href="<?php echo site_url('admin/data_pelanggan') ?>"><input type="button" value="Kembali"></a>
</form>
 -->

       <section class="content-header">
      <h1>
        Edit Data Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a>Data Pelanggan</li>
        <li class="active">Edit Data Pelanggan</li>
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
            <form method="post" action="<?php echo site_url('admin/edit_pelanggan') ?>">
              <div class="box-body">
                <div class="form-group">
                	<input type="hidden" name="id" value="<?php echo $data->IDPELANGGAN; ?>">
                  <label>No Meter</label>
                  <input type="text" name="nometer" value="<?php echo $data->NOMETER; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $data->NAMA; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $data->ALAMAT ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user" value="<?php echo $data->USERNAME ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="alamat" value="<?php echo $data->PASSWORD ?>" class="form-control">
                </div>
                <!-- <div class="form-group">
                  <label>Kode Tarif</label>
                  <select name="kode" class="form-control">
                    <?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>" <?php if($data->KODETARIF == $key->KODETARIF){echo "selected=''";}else{echo "";}?>><?php echo $key->KODETARIF;?></option>
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