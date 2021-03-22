<?php

if (isset($_GET['id_jadwal']))
{
	$id_jadwal = $_GET['id_jadwal'];
	$sqltampil = mysql_query("SELECT * FROM jadwal WHERE id_jadwal='$id_jadwal'");
	$hasil = mysql_fetch_array($sqltampil);
			$id_jadwal = $hasil['id_jadwal'];
			$tujuan = $hasil['tujuan'];
			
			$jumlah_kursi = $hasil['jumlah_kursi'];
			
			$biaya = $hasil['biaya'];
			$id_kendaraan = $hasil['id_kendaraan'];
			$id_pengemudi = $hasil['id_pengemudi'];
			$id_karyawan = $hasil['id_karyawan'];
			
			
if (isset($_POST['simpan']))
{	
			$tujuan = $_POST['tujuan'];
			
			$jumlah_kursi = $_POST['jumlah_kursi'];
			
			$biaya = $_POST['biaya'];
			$id_kendaraan = $_POST['id_kendaraan'];
			$id_pengemudi = $_POST['id_pengemudi'];
			$id_karyawan = $_POST['id_karyawan'];

		$masuk = mysql_query("UPDATE jadwal SET  
							tujuan='$tujuan',
							biaya='$biaya',
							jumlah_kursi='$jumlah_kursi',
							
							id_kendaraan='$id_kendaraan',
							id_karyawan='$id_karyawan',
							
							id_pengemudi='$id_pengemudi'
							where id_jadwal='$id_jadwal'");
										
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								window.location ='admin.php?page2=tampil_tujuan';</script>"; 
						}
				
				else	
						{ echo "<script> alert ('gagal simpan'); </script>"; 
						} 		
}
}
else{
	echo "Tidak ada id yang dipilih !!!";
}
?>
  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data jadwal</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">			  				
			  				
			  					<form method='POST' enctype='multipart/form-data'>
		<fieldset>
									
										<div class="form-group">
											<label>ID Jadwal</label>
											<input class="form-control" type="text" name="id_jadwal" readonly value="<?php echo $id_jadwal; ?>">
										</div>
										
																			
										<div class="form-group">
											<label>Tujuan</label>
											<textarea name="tujuan" class="form-control"><?php echo $tujuan; ?></textarea>
										</div>
										
										<div class="form-group">
											<label>Biaya</label>
											<input class="form-control" type="text" name="biaya" readonly value="<?php echo $biaya; ?>">
										</div>
										
										
										<div class="form-group">
											<label>Jumlah Kursi</label>
											<input class="form-control" type="text" name="jumlah_kursi" value="<?php echo $jumlah_kursi; ?>">
										</div>
										
										<div class="form-group">
											<label>Pengemudi</label>
											<select name='id_pengemudi' class='form-control'>
											<?php
											$tampil=("SELECT * FROM pengemudi");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_pengemudi'] == $r['id_pengemudi'])
											{
											echo "<option value=$r[id_pengemudi] selected>$r[nama_pengemudi]</option>";
											}
											else
											{
											echo "<option value=$r[id_pengemudi]>$r[nama_pengemudi]</option>";
											}
											}
											?>
											</select>
										</div>
												
										<div class="form-group">
											<label>Kendaraan</label>
											<select name='id_kendaraan' class='form-control'>
											<?php
											$tampil=("SELECT * FROM kendaraan");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_kendaraan'] == $r['id_kendaraan'])
											{
											echo "<option value=$r[id_kendaraan] selected>$r[merk]</option>";
											}
											else
											{
											echo "<option value=$r[id_kendaraan]>$r[merk]</option>";
											}
											}
											?>
											</select>
										</div>	

										<div class="form-group">
											<label>Karyawan</label>
											<select name='id_karyawan' class='form-control'>
											<?php
											$tampil=("SELECT * FROM karyawan");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_karyawan'] == $r['id_karyawan'])
											{
											echo "<option value=$r[id_karyawan] selected>$r[nama_karyawan]</option>";
											}
											else
											{
											echo "<option value=$r[id_karyawan]>$r[nama_karyawan]</option>";
											}
											}
											?>
											</select>
										</div>											
										
										<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
										
									</fieldset>
									<div>
																				
											
									</div>
								</form></div>
        </div>
   