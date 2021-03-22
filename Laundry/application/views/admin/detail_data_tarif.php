<!-- <h1>Edit Data Pelanggan</h1>

<form method="post" action="<?php echo site_url('admin/edit_tarif') ?>">
	<input type="hidden" name="kode" value="<?php echo $data->KODETARIF; ?>"><br>
	DAYA <input type="text" name="daya" value="<?php echo $data->DAYA; ?>"><br>
	Tarif per Kwh <input type="text" name="tarif" value="<?php echo $data->TARIFPERKWH; ?>"><br>
	<input type="submit" value="Simpan">
	<a href="<?php echo site_url('admin/data_tarif') ?>"><input type="button" value="Kembali"></a>
</form>
 -->

     <section class="content-header">
      <h1>
        Detail Tarif
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tarif</a></li>
        <li class="active">detail Tarif</li>
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
            <form method="post" action="<?php echo site_url('admin/edit_tarif') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>DAYA</label>
                  <input readonly="" type="text" name="kode" value="<?php echo $data->KODETARIF; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>DAYA</label>
                  <input readonly="" type="text" name="daya" value="<?php echo $data->DAYA; ?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Tarif per Kwh</label>
                  <input readonly="" type="text" name="tarif" value="<?php echo $data->TARIFPERKWH; ?>" class="form-control">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo site_url('admin/data_tarif') ?>"><button type="button" class="btn btn-info">Kembali</button></a>                
              </div>
            </form>
          </div>
        </div>
    </div>
</section>