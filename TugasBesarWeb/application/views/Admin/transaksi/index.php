  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
          
       

            <h1 class="m-0 text-dark">Transaksi</h1>
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
           
            
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class='card-header'>
                    <a class='btn btn-success'href= "<?= base_url() ?>transaksiClient/post">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>
                        Tambah
                    </span>
                    </a>
                </div>
                
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Harga Total</th>
                  <th>Bayar</th>
                  <th>Kembalian</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($transaksi as $trs): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $trs->nama_barang ?> </td>
                        <td><?= $trs->jumlah ?></td>
                        <td><?= $trs->harga ?></td>
                        <td><?= $trs->harga_total ?></td>
                        <td><?= $trs->bayar ?></td>
                        <td><?= $trs->kembalian ?></td>
                        <!-- <td><?= $trs->tanggal ?></td> -->
                        <td><?= date('d F Y', strtotime($trs->tanggal)); ?>
                        <td>
                            <a class='btn btn-danger' href="<?= base_url().'transaksiClient/delete/'.$trs->id_transaksi ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                           
                            <a class='btn btn-info' href='<?= base_url().'transaksiClient/detail/'.$trs->id_transaksi ?>' class='btn btn-biru'>
                                 <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>
                          
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
            
            <!-- /.card-body -->
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