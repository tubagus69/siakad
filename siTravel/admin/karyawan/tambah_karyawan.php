<?php

	if (isset($_POST['simpan']))
	{
	$id_karyawan = $_POST['id_karyawan'];
	$nama_karyawan = $_POST['nama_karyawan'];	
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$no_telp=$_POST['no_telp'];
	$no_telpkaryawan=strlen($_POST['no_telp']);
	$status_karyawan=$_POST['status_karyawan'];
	$id_shift=$_POST['id_shift'];
	$username = $_POST['username'];
	$password = MD5($_POST['password']);	
		
	$lokfoto = $_FILES['foto_karyawan']['tmp_name'];
	$namfoto = $_FILES['foto_karyawan']['name'];
	$dirfoto = "./photo/";
	
	$cekdata="select login_username from admin where login_username='$username'"; 
	$ada=mysql_query($cekdata) or die(mysql_error());
	
	if ($no_telpkaryawan > 12 or $no_telpkaryawan <11)		
		{
		echo"<script> alert ('MAAF Nomor Yang Anda Masukan Tidak Valid');
		window.location='admin.php?page2=tambah_karyawan'
		</script>";
		}
		
	elseif ($status_karyawan == 'T')		
		{
		echo"<script> alert ('Maap Status Yang Anda Masukkan Harus Aktif');
		window.location='admin.php?page2=tambah_karyawan'
		</script>";
		}
	
	else if(mysql_num_rows($ada)>0) 
		{
		echo"<script> alert ('MAAF Username Telah Ada');
		window.location='admin.php?page2=tambah_karyawan'
		</script>";
		} 
		
	
		else {
	
		if (is_uploaded_file($lokfoto))
		{
		move_uploaded_file($lokfoto, $dirfoto.$namfoto);
		}
		
	$masuk = mysql_query("insert into karyawan 
				(id_karyawan, nama_karyawan, alamat, no_telp, email, id_shift, status_karyawan, username, password, foto_karyawan) 
				values 
				('$id_karyawan', '$nama_karyawan', '$alamat', '$no_telp', '$email', '$id_shift', '$status_karyawan', '$username', '$password', '$namfoto')"); 
					
				if($masuk)
						{ echo " <script> alert ('file berhasil disimpan'); 
								 window.location ='admin.php?page2=tampil_karyawan'</script>"; 
						}
				else
						{ echo "<script> alert ('gagal simpan'); 
								window.location='admin.php?page2=tambah_karyawan'</script>"; 
						} 
						
	$sql = mysql_query("INSERT INTO admin(login_username, login_password, namalengkap, foto, login_level, status_admin)
								VALUES('$username', '$password', '$nama_karyawan', '$namfoto', 'karyawan', '$status_karyawan')");
			if ($sql)
						{ echo " <script> alert ('file berhasil disimpan'); 
								 window.location ='admin.php?page2=tampil_karyawan'</script>"; 
						}
			else
						{ echo "<script> alert ('gagal simpan'); 
								window.location='admin.php?page2=tambah_karyawan'</script>"; 
						}
						
	}
	}

$query=mysql_query("select max(id_karyawan)As akhir from karyawan")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,3,4)+1;
$next_hasil='KR-'.sprintf('%03s',$next);

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
											<label>ID karyawan</label>
											<input class="form-control" name="id_karyawan" type="text" value=<?php echo" $next_hasil";?> READONLY>
										</div>
										
										<div class="form-group">
											<label>Nama karyawan</label>
											<input class="form-control" name="nama_karyawan" type="text">
										</div>
										
										<div class="form-group">
											<label>No Telepon</label>
											<input class="form-control" name="no_telp" type="text">
										</div>
										
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" name="email" type="text">
										</div>
										
										<div class="form-group">
											<label>Alamat</label>
											<textarea class="form-control" name='alamat' rows="3"></textarea>
										</div>
										
										<div class="form-group">
											<label>Foto karyawan</label>
											<input name="foto_karyawan" type="file">
										</div>
										
										<div class="form-group">
											<label>Shift</label>
											<select name='id_shift' class="form-control">
											<option value='0'>Pilih Jadwal Shift</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from shift");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_shift]'>
														$r[shift]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select>
										</div>
										
										<div class="form-group">
											<label>Status karyawan</label>
											<input type='radio' name='status_karyawan' value='Y'>Y
											<input type='radio' name='status_karyawan' value='T'>T
										</div>
										
										<div class="form-group">
											<label>Username</label>
											<input class="form-control" name="username" type="text">
										</div>
										
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" name="password" type="text">
										</div>
										
										<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
										
									</fieldset>
									
								</form></div>
        </div></div>
   