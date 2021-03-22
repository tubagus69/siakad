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
           <div class="box-header">
              <a target="_BLANK" href="<?php echo site_url('admin/cetak_laporan'); ?>"> <button type="button" class="btn btn-primary">Cetak</button> </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
						<td>No</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Bulan</td>
						<td>Tahun</td>
						<td>Jumlah Meter</td>
						<td>Status</td>
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
					<td><?php $bln = $this->admin_model->tampil_bulan_by_id($key->BULAN); echo $bln->NAMA; ?></td>
					<td><?php echo $key->TAHUN?></td>
					<td><?php echo $key->JUMLAHMETER?></td>
					<td><?php if($key->STATUS == 0){echo "Belum di Bayar";}else{echo "Sudah di Bayar";}?></td>
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

<script>
  $("#loginform").submit(function() {
        //Data
         var bulan = $('#bulan').val();
         var tahun = $('#tahun').val();
        $.ajax({ 
          type: 'POST', 
          url: '<?php echo site_url('admin/filter_data_laporan'); ?>', 
          data: {'bulan' : $('#bulan').val(), 'tahun' : $('#tahun').val()}, 
          dataType: 'json',
          success: function (data) 
          { 
            if(data == 0)
            {
              alert("berhasil login"+bulan+tahun);
            }else{
                alert("Accc."+bulan+tahun);
              }
          },
          error: function()
          {
              alert("Authentification Failed.");
          }
        });        
        return false;
    });
</script>