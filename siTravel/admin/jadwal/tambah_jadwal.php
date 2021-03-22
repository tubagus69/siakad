<?php

	if (isset($_POST['simpan']))
	{
	$id_jadwal=$_POST['id_jadwal'];
	$tujuan = $_POST['tujuan'];

	$id_kendaraan = $_POST['id_kendaraan'];
	$id_pengemudi = $_POST['id_pengemudi'];
	$id_karyawan = $_POST['id_karyawan'];
	$biaya = $_POST['biaya'];
	$jumlah_kursi = $_POST['jumlah_kursi'];

	
		$masuk = mysql_query("insert into jadwal(id_jadwal, tujuan,  id_kendaraan, id_pengemudi, id_karyawan, biaya, jumlah_kursi) 
										  values 
												('$id_jadwal', '$tujuan', '$id_kendaraan', '$id_pengemudi', '$id_karyawan', '$biaya', '$jumlah_kursi')"); 
				
				if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
					window.location ='admin.php?page2=tampil_tujuan'</script>"; 
						}
				else{ echo "<script> alert ('gagal simpan'); 
					window.location='admin.php?page2=tambah_jadwal'</script>"; 
					} 
				
		}		
		
	

$query=mysql_query("select max(id_jadwal)As akhir from jadwal")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,3,4)+1;
$next_hasil='JK-'.sprintf('%03s',$next);

?>	

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Jadwal Keberangkatan</h2>

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
											<label>Kode Jadwal</label>
											<input class="form-control" name="id_jadwal" type="text" value=<?php echo" $next_hasil";?> READONLY>
										</div>
										
										<div class="form-group">
											<label>Tujuan</label>
											<textarea class="form-control" name='tujuan' rows="3"></textarea>
										</div>
										
										<div class="form-group">
											<label>Biaya</label>
											<input class="form-control" name="biaya" type="text">
										</div>
										
										
										
										<div class="form-group">
											<label>Jumlah Kursi</label>
											<input class="form-control" name="jumlah_kursi" type="text">
										</div>
										
										<div class="form-group">
											<label>ID Kendaraan</label>
											<select name='id_kendaraan' class="form-control">
											<option value='0'>Pilih Kendaraan</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from kendaraan");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_kendaraan]'>
														$r[id_kendaraan] - $r[merk]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select>
										</div>
										
										<div class="form-group">
											<label>ID Pengemudi</label>
											<select name='id_pengemudi' class="form-control">
											<option value='0'>Pilih Pengemudi</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from pengemudi");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_pengemudi]'>
														$r[id_pengemudi] - $r[nama_pengemudi]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select>
										</div>
										
										<div class="form-group">
											<label>ID Karyawan</label>
											<select name='id_karyawan' class="form-control">
											<option value='0'>Pilih Karyawan</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from karyawan");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_karyawan]'>
														$r[id_karyawan] - $r[nama_karyawan]
													</option>";
													
											}			
												echo"</select>";	
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
   