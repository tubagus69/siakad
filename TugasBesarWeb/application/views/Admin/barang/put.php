           <!-- Content Wrapper. Contains page content -->
           <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Barang</h1>
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
                        Form Edit Data Barang
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($barang as $brg):?>
                   
                    <form action="<?php echo site_url(); ?>BarangClient/put_process" method="post" >
                    

                        
                        <div class="form-group">
                            <label for="id_kategori">Barang</label>
                            <select class="form-control" name="kategori" id="kategori">
                            <?php foreach($dataKategori as $k):?>
                           <option value="<?=$k->id_kategori?>"><?=$k->nama_kategori?></option>
                           <?php endforeach ?>
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="merk">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                            value="<?=$brg->nama_barang;?>"> 
                            
                            <input type="hidden" class="form-control" id="id_barang" name="id_barang"
                            value="<?=$brg->id_barang;?>">
                        </div>

                        <div class="form-group">
                            <label for="harga">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok"
                            value="<?=$brg->stok;?>">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga"
                            value="<?=$brg->harga;?>">
                        </div>

                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        </form>
                     
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