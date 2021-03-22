<?php

if (isset($_GET['id_karyawan']))
{
	$id_karyawan = $_GET['id_karyawan'];
	$sqltampil = mysql_query("SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
	$hasil = mysql_fetch_array($sqltampil);
			$id_karyawan = $hasil['id_karyawan'];
			$nama_karyawan=$hasil['nama_karyawan'];
			$alamat=$hasil['alamat'];
			$no_telp=$hasil['no_telp'];
			$status_karyawan=$hasil['status_karyawan'];
			$foto_karyawan = $hasil['foto_karyawan'];
			$id_shift = $hasil['id_shift'];
			$email = $hasil['email'];
			$username = $hasil['username'];
			
if (isset($_POST['simpan']))
{
			$nama_karyawan= $_POST['nama_karyawan'];
			$alamat= $_POST['alamat'];
			$no_telp=$_POST['no_telp'];
			$status_karyawan=$_POST['status_karyawan'];
			$id_shift = $_POST['id_shift'];
			$email = $_POST['email'];
			
			if (isset($_FILES['foto_karyawan']['tmp_name']))
			{
				$dir ="./photo/";
				$foto_karyawan = $_FILES['foto_karyawan']['name'];
				if (is_uploaded_file($_FILES['foto_karyawan']['tmp_name']))
				{
					move_uploaded_file($_FILES['foto_karyawan']['tmp_name'], $dir.$foto_karyawan);
					$sqlfoto = mysql_query("UPDATE karyawan,admin SET 
											karyawan.foto_karyawan='$foto_karyawan',
											admin.foto='$foto_karyawan'
											WHERE karyawan.username='$username'
											and admin.login_username='$username'
											and karyawan.id_karyawan='$id_karyawan'");
				}
			}
	$sqlupdate = mysql_query("UPDATE karyawan,admin SET 
								karyawan.nama_karyawan='$nama_karyawan', 
								karyawan.alamat='$alamat',
								karyawan.no_telp='$no_telp',
								karyawan.status_karyawan='$status_karyawan', 	
								karyawan.email='$email',
								karyawan.id_shift='$id_shift', 									
								admin.namalengkap='$nama_karyawan',
								admin.status_admin='$status_karyawan'
								WHERE karyawan.username='$username'
								and admin.login_username='$username'
                                and karyawan.id_karyawan='$id_karyawan'")or die(mysql_error());
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); 
				window.location='admin.php?page2=tampil_karyawan'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
}
}
else{
	echo "Tid_karyawanak ada id_karyawan yang dipilih !!!";
}
?>
  <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data Karyawan</h2>

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
											<label>Kode karyawan</label>
											<input class="form-control" type="text" name="id_karyawan" readonly value="<?php echo $id_karyawan; ?>">
										</div>
										
										<div class="form-group">
											<label>Nama karyawan</label>
											<input class="form-control" type="text" name="nama_karyawan" value="<?php echo $nama_karyawan; ?>">
										</div>
																	
										<div class="form-group">
											<label>Alamat karyawan</label>
											<textarea class="form-control" name="alamat" rows="3"> <?php echo $alamat; ?></textarea>
										</div>
										
										<div class="form-group">
											<label>No Telepon</label>
											<input class="form-control" type="number" name="no_telp"  value="<?php echo $no_telp; ?>">
										</div>
										
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
										</div>
										
										<div class="form-group">
											<label>Jadwal Shift</label>
											<select name='id_shift' class='form-control'>
											<?php
											$tampil=("SELECT * FROM shift");
											$query_hasil=mysql_query($tampil);
											while($r=mysql_fetch_array($query_hasil))
											{
											if ($hasil['id_shift'] == $r['id_shift'])
											{
											echo "<option value=$r[id_shift] selected>$r[shift]</option>";
											}
											else
											{
											echo "<option value=$r[id_shift]>$r[shift]</option>";
											}
											}
											?>
											</select>
										</div>
										
										<div class="form-group">
											<label>Status karyawan</label><br>
											<?php if ($hasil['status_karyawan'] == "Y") : ?><input type="radio" name="status_karyawan" value="Y" id="Y" checked /><label for="Y">Y</label><input type="radio" name="status_karyawan" value="T" id="T" /><label for="T">T</label>
            <?php else : ?><input type="radio" name="status_karyawan" value="Y" id="Y" /><label for="Y">Y</label><input type="radio" name="status_karyawan" value="T" id="T" checked /><label for="T">T</label><?php endif; ?>
										</div>
																					
										<div class="form-group">
											<label>Foto karyawan</label><br>
											<img src="./photo/<?php echo $foto_karyawan; ?>" width="70px">
											<input name="foto_karyawan" type="file">
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
   