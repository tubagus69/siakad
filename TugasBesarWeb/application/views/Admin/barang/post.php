<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Barang</h1>
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
                        Form Tambah Data Barang
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?= form_open('BarangClient/post_process') ?>
                    <form action="" method="post">
                       <div class="form-group">
                         <label for="">Barang</label>
                         <select class="form-control"id="barang" name ="kategori">
                          <?php foreach ($dataKategori as $k):?>
                            <option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
                          <?php endforeach ?>
                         </select>
                       </div>
                        <div class="form-group">
                            <label for="nim">Nama barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="nim">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                        </div>
                      
                       <div class="form-group">
                            <label for="nim">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <?php form_close(); ?>
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