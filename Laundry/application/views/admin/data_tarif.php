 <section class="content-header">
      <h1>
        Data Tarif <?php //$cek = $this->admin_model->coba_coba();echo $cek->aa; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tarif</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<div class="box">
           <div class="box-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<td>No</td>
					<td>Kode Tarif</td>
					<td>Daya</td>
					<td>Tarif per Kwh</td>
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
					<td><?php echo $key->KODETARIF?></td>
					<td><?php echo $key->DAYA?></td>
					<td><?php echo $key->TARIFPERKWH?></td>
					<td>
            <a href="<?php echo site_url('admin/datail_tarif/'.$key->KODETARIF);?>">Detail</a>
						<a href="<?php echo site_url('admin/update_tarif/'.$key->KODETARIF);?>">Edit</a>
						<a href="<?php echo site_url('admin/delete_tarif/'.$key->KODETARIF);?>">Hapus</a>
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

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?php echo site_url('admin/tambah_tarif') ?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tarif</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Daya</label>
                  <input type="text" name="daya" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tarif per KWH</label>
                  <input type="text" name="tarif" class="form-control">
                </div>
              </div>  
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
