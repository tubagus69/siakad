<?php

	if (isset($_POST['simpan']))
	{
	$id_pengemudi = $_POST['id_pengemudi'];
	$nama_pengemudi = $_POST['nama_pengemudi'];	
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];
	$no_telppengemudi=strlen($_POST['no_telp']);
	$id_kendaraan=$_POST['id_kendaraan'];
	
	$lokfoto = $_FILES['foto_pengemudi']['tmp_name'];
	$namfoto = $_FILES['foto_pengemudi']['name'];
	$dirfoto = "./photo/";
	
		
	if ($no_telppengemudi > 12 or $no_telppengemudi <11)		
		{
		echo"<script> alert ('MAAF Nomor Yang Anda Masukan Tidak Valid');
		window.location='admin.php?page2=tambah_pengemudi'
		</script>";
		}
		
	
		else {
	
		if (is_uploaded_file($lokfoto))
		{
		move_uploaded_file($lokfoto, $dirfoto.$namfoto);
		}
		
	$masuk = mysql_query("insert into pengemudi 
				(id_pengemudi, nama_pengemudi, alamat, no_telp, id_kendaraan, foto_pengemudi) 
				values 
				('$id_pengemudi', '$nama_pengemudi', '$alamat', '$no_telp', '$id_kendaraan', '$namfoto')"); 
					
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								 window.location ='admin.php?page2=tampil_pengemudi'</script>"; 
						}
				else
						{ echo "<script> alert ('gagal simpan'); 
								window.location='admin.php?page2=tambah_pengemudi'</script>"; 
						} 
						
	
						
	}
	}

$query=mysql_query("select max(id_pengemudi)As akhir from pengemudi")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,3,4)+1;
$next_hasil='PN-'.sprintf('%03s',$next);

?>	

<script src="libs/jquery.js"></script>
		<script type="text/javascript" src="libs/jquery.validate.js"></script>
		<script type="text/javascript" src="libs/messages_id.js"></script>
<script>$(document).ready(function() {
				$("#formpeminjam").validate();
			});
</script>

  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

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
											<label>ID pengemudi</label>
											<input class="form-control" name="id_pengemudi" type="text" value=<?php echo" $next_hasil";?> READONLY>
										</div>
										
										<div class="form-group">
											<label>Nama pengemudi</label>
											<input class="form-control" name="nama_pengemudi" type="text">
										</div>
										
										<div class="form-group">
											<label>No Telepon</label>
											<input class="form-control" name="no_telp" type="text">
										</div>
																			
										<div class="form-group">
											<label>Alamat</label>
											<textarea class="form-control" name='alamat' rows="3"></textarea>
										</div>
										
										<div class="form-group">
											<label>Foto pengemudi</label>
											<input name="foto_pengemudi" type="file">
										</div>
										
										<div class="form-group">
											<label>ID Kendaraan</label>
											<select name='id_kendaraan' class="form-control">
											<option value='0'>Pilih ID Kendaraan</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from kendaraan");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_kendaraan]'>
														$r[merk]
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
									
								</form></div>
        </div></div>
   