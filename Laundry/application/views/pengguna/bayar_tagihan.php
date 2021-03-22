       <section class="content-header">
      <h1>
        Bayar Tagihan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a>Data Tagihan</li>
        <li class="active">Bayar Tagihan</li>
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
            <form method="post" action="<?php echo site_url('pengguna/insert_bayar_tagihan') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Bulan Penggunaan</label>
                  <input type="hidden" name="idtagihan" value="<?php echo $idtagihan?>">
                  <input disabled="" type="text" name="bulan" value="<?php $cek = $this->pengguna_model->data_bulan_by_id($tagihan->BULAN); echo $cek->NAMA?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Meter Awal</label>
                  <input disabled="" type="text" name="awal" value="<?php echo $tagihan->METERAWAL?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Meter Akhir</label>
                  <input disabled="" type="text" name="akhir" value="<?php echo $tagihan->METERAKHIR?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jumlah Meter</label>
                  <input disabled="" type="text" name="jumlah" value="<?php echo $tagihan->JUMLAHMETER?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Tarif/KWH</label>
                  <input disabled="" type="text" name="jumlah" value="<?php echo $pelanggan->TARIFPERKWH?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Tagihan</label>
                  <input disabled="" type="text" name="jumlah" value="<?php echo $pelanggan->TARIFPERKWH * $tagihan->JUMLAHMETER;?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Biaya Admin</label>
                  <input disabled="" type="text" name="admin" value="<?php echo $admin->HARGA;?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Total Akhir</label>
                  <input disabled="" type="text" name="total" value="<?php echo $pelanggan->TARIFPERKWH * $tagihan->JUMLAHMETER + $admin->HARGA;?>" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Bayar</label>
                  <input type="text" name="bayar" class="form-control" >
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