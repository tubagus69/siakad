  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Transaksi</h1>
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
                        Form Tambah Data Transaksi
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?= form_open('TransaksiClient/post_process') ?>
                    <form action="" method="post">
                       <div class="form-group">
                         <label for="">Transaksi</label>
                         <select class="form-control"id="transaksi" name ="barang">
                          <?php foreach ($dataBarang as $k):?>
                            <option value="<?=$k->id_barang?>"><?=$k->nama_barang?>- Rp. <?=$k->harga?></option>
                          <?php endforeach ?>
                         </select>
                       </div>
                        <div class="form-group">
                            <label for="nim">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="">
                        </div>
                        <div class="form-group">
                            <label for="nim">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="">
                        </div>

                        <div class="form-group">
                            <label for="nim">Harga Total</label>
                            <input type="text" class="form-control" id="harga_total" name="harga_total">
                        </div>
                      
                       <div class="form-group">
                            <label for="nim">Bayar</label>
                            <input type="text" class="form-control" id="bayar" name="bayar">
                        </div>

                        <div class="form-group">
                            <label for="nim">Kembalian</label>
                            <input type="text" class="form-control" id="kembalian" name="kembalian">
                        </div>

                        <div class="form-group">
                            <label for="nim">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
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


  