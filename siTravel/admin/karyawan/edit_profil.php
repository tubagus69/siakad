<?php

	$sql= mysql_query("select * from karyawan where username='$_SESSION[login_username]'") or die(mysql_error());
	$data=mysql_fetch_array($sql);

	if(isset($_POST['simpan']))
	{
		$nama_karyawan= $_POST['nama_karyawan'];
		$alamat= $_POST['alamat'];
		$no_telp=$_POST['no_telp'];
		$email = $_POST['email'];
		
		$passwordlama =MD5($_POST['passwordlama']);
		$passwordbaru =MD5($_POST['passwordbaru']);
		$konfirmasipassword =MD5($_POST['konfirmasipassword']);
		$username = $_POST['username'];
		
	$cekuser = "select * from admin where login_username = '$username' and login_password = '$passwordlama'";
	$querycekuser = mysql_query($cekuser);
	$count = mysql_num_rows($querycekuser); 
	
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
								karyawan.email='$email',										
								admin.namalengkap='$nama_karyawan'
								WHERE karyawan.username='$username'
								and admin.login_username='$username'");
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); window.location='utama.php?page2=home'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
		
		if ($count >= 1)
			{
			$updatepassword ="UPDATE admin, karyawan set 
							admin.login_password='$passwordbaru',
							karyawan.password='$passwordbaru'
							where karyawan.username='$_SESSION[login_username]'
							and admin.login_username='$_SESSION[login_username]'
						
								";
			$updatequery = mysql_query($updatepassword);
			if($updatequery)
			{
			"Password telah diganti menjadi $passwordbaru";
			echo"<script> alert ('Passord telah diganti');
					window.location='utama.php?page=home'
				</script>";
			}
			}
	}
?>
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<h4><b>Edit Profil</b></h4><br><br>
<div class="content4">

	
	<form method='POST'>
	<table border='0' align='center' >

	
	
	
	<tr>
		<td>Nama </td> 
	</tr>
	<tr>
		<td><input type='text' name="nama_karyawan" value='<?php echo "$data[nama_karyawan]"; ?>' /></td>
	</tr>

	<tr>
		<td>Alamat</td>	
	</tr>
	<tr>
		<td><textarea cols='25' rows='5' name="alamat"><?php echo "$data[alamat]";?></textarea></td>
	</tr>
	
	<tr>
		<td>No Telepon</td>	
	</tr>
	<tr>
		<td><input type='text' name="no_telp" value='<?php echo "$data[no_telp]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Email</td>	
	</tr>
	<tr>
		<td><input type='text' name="email" value='<?php echo "$data[email]"; ?>' /></td>
	</tr>

	<tr>
		<td>Foto </td>	
	</tr>
	<tr>
		<td><img src="./admin/photo/<?php echo "$data[foto_karyawan]"; ?>" width="70px">
											<input name="foto_karyawan" type="file"></td>
	</tr>
	
	<tr>
		<td>Username</td>	
	</tr>
	<tr>
		<td><input type='text' name="username" value='<?php echo "$data[username]"; ?>' readonly /></td>
	</tr>
	
	<tr>
		<td>Password Yang Berlaku </td>	
	</tr>
	<tr>
		<td><input name="passwordlama" type="password"></td>
	</tr>
	
	<tr>
		<td>Password Baru </td>	
	</tr>
	<tr>
		<td><input name="passwordbaru" type="password"></td>
	</tr>
	
	<tr>
		<td>Konfirmasi Password Baru</td>	
	</tr>
	<tr>
		<td><input name="konfirmasipassword" type="password"></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type='submit' name='simpan' value='Simpan'><input type='reset' name='simpan' value='Batal'></td>
	</tr>
	</form>
	</table>
	</div>
	
	
	</div></div>
		