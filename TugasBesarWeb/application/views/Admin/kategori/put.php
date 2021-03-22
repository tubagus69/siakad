
                      <!-- Content Wrapper. Contains page content -->
                      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kategori</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
          <div class ="card">
                    <div class="card-header">
                        Form Edit Data Kategori
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($kategori as $kt):?>
                      <?= form_open('KategoriClient/put_process') ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_kategori" value="<?= $kt->id_kategori ;?>">
                       
                        <div class="form-group">
                            <label for="jenis">Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                            value="<?=$kt->nama_kategori;?>">
                        </div>

                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        </form>
                        <?php form_close(); ?>
                        <?php endforeach ?>
                        </div>
                    </div>
</div>   


          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->