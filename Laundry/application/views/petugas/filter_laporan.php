 <section class="content-header">
      <h1>
        Data Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Laporan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<div class="box">
          
            <!-- /.box-header -->
            <div class="box-body">
            <form method="post" action="<?php echo site_url('petugas/data_laporan') ?>">
             <div class="col-md-12">
          <!-- general form elements -->
          
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                  <div class="form-group col-md-6">
                  <label>Bulan</label>
                  <select name="bulan" class="form-control">
                    <option value="0">Semua</option>
                <?php foreach ($bulan as $key) { ?>
                  <option value="<?php echo $key->ID ?>"> <?php echo $key->NAMA ?> </option>
                <?php } ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Tahun</label>
                  <select name="tahun" class="form-control">
                    <option value="0">Semua</option>
                <?php for ($i = 2018; $i <= date('Y') ; $i++) { ?>
                  <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                <?php } ?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info center-block">Kirim</button>
              </div>
              
          
        </div>

            </form>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
</section>
