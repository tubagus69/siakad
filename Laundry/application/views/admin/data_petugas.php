 <section class="content-header">
      <h1>
        Data Petugas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Petugas</a></li>
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
        						<td>Nama</td>
        						<td>Alamat</td>
        						<td>Jenis Kelamin</td>
                    <td>Level</td>
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
					<td><?php echo $key->NAMA?></td>
					<td><?php echo $key->ALAMAT?></td>
					<td><?php if($key->JENIS_KELAMIN == 'l'){echo "Laki-Laki";}else{echo "Perempuan";}?></td>
          <td><?php if($key->LEVEL== 1){echo "Admin";}else{echo "Petugas";}?></td>
					<td>
            <a href="<?php echo site_url('admin/detail_petugas/'.$key->IDUSER);?>">Detail</a>
						<a href="<?php echo site_url('admin/update_petugas/'.$key->IDUSER);?>">Edit</a>
						<a href="<?php echo site_url('admin/delete_petugas/'.$key->IDUSER);?>">Hapus</a>
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
              <form method="post" action="<?php echo site_url('admin/tambah_petugas') ?>">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Petugas</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control">
                    <option value="l">Laki_Laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select name="level" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">Petugas</option>
                  </select>
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
