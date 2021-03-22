<!-- <h1>Edit Data Pelanggan</h1>

<form method="post" action="<?php echo site_url('petugas/edit_pelanggan') ?>">
	<input type="hidden" name="id" value="<?php echo $data->IDPELANGGAN; ?>"><br>
	Kode Tarif 
	<select name="kode">
		
		<?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>" <?php if($data->KODETARIF == $key->KODETARIF){echo "selected=''";}else{echo "";}?> ><?php echo $key->KODETARIF;?></option>
			<?php }
		?>	
	</select><br>
	<input type="submit" value="Simpan">
	<a href="<?php echo site_url('petugas/data_pelanggan') ?>"><input type="button" value="Kembali"></a>
</form> -->


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
            <form method="post" action="<?php echo site_url('petugas/edit_pelanggan') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Tarif</label>
                  <input type="hidden" name="id" value="<?php echo $data->IDPELANGGAN; ?>">
                  <select name="kode" class="form-control">
                    <?php 
			foreach ($tarif as $key) { ?>
				<option value="<?php echo $key->KODETARIF;?>" <?php if($data->KODETARIF == $key->KODETARIF){echo "selected=''";}else{echo "";}?>><?php echo $key->KODETARIF;?></option>
			<?php }
		?>	
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo site_url('petugas/data_pelanggan') ?>"><button type="button" class="btn btn-info">Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>