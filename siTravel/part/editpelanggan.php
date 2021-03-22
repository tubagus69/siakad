<?php

	$sql= mysql_query("select * from pengguna where pengguna_username='$_SESSION[login_username]'") or die(mysql_error());
	$data=mysql_fetch_array($sql);

	if(isset($_POST['simpan']))
	{
		$pengguna_nama = $_POST['pengguna_nama'];
		$pengguna_email = $_POST['pengguna_email'];
		$pengguna_hp = $_POST['pengguna_hp'];
		$pengguna_alamat = $_POST['pengguna_alamat'];
		$pengguna_kecamatan = $_POST['pengguna_kecamatan'];
		$pengguna_kota = $_POST['pengguna_kota'];
		$pengguna_kodepos = $_POST['pengguna_kodepos'];
		$pengguna_provinsi = $_POST['pengguna_provinsi'];
		$pengguna_nm_rek = $_POST['pengguna_nm_rek'];
		$pengguna_rek = $_POST['pengguna_rek'];
		
		$passwordlama =MD5($_POST['passwordlama']);
		$passwordbaru =MD5($_POST['passwordbaru']);
		$konfirmasipassword =MD5($_POST['konfirmasipassword']);
		$pengguna_username = $_POST['pengguna_username'];
		
	$cekuser = "select * from admin where login_username = '$pengguna_username' and login_password = '$passwordlama'";
	$querycekuser = mysql_query($cekuser);
	$count = mysql_num_rows($querycekuser); 
	
		$sql = mysql_query("update pengguna,admin set
								pengguna.pengguna_nama='$pengguna_nama',
								pengguna.pengguna_email='$pengguna_email',
								pengguna.pengguna_hp='$pengguna_hp',
								pengguna.pengguna_alamat='$pengguna_alamat',
								pengguna.pengguna_kecamatan='$pengguna_kecamatan',
								pengguna.pengguna_kota='$pengguna_kota',
								pengguna.pengguna_kodepos='$pengguna_kodepos',
								pengguna.pengguna_provinsi='$pengguna_provinsi',
								pengguna.pengguna_nm_rek='$pengguna_nm_rek',
								pengguna.pengguna_rek='$pengguna_rek',
								admin.namalengkap='$pengguna_nama'
								
							where pengguna.pengguna_username='$_SESSION[login_username]'
							and admin.login_username='$_SESSION[login_username]'");
		
		
			
		if ($sql)
		{
			echo "<script>alert('Data berhasil disimpan');
						window.location='utama.php?page2=home';</script>";
		}
		else
		{
			echo "<script>alert('Data gagal disimpan');</script>";
		}
		
		if ($count >= 1)
			{
			$updatepassword ="UPDATE admin, pengguna set 
							admin.login_password='$passwordbaru',
							pengguna.pengguna_password='$passwordbaru'
							where pengguna.pengguna_username='$_SESSION[login_username]'
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

<div class='mostnew3'>
	
	<form method='POST'>
	<table border='0' align='center' >

	
	
	
	<tr>
		<td>Atas Nama Rekening</td> 
	</tr>
	<tr>
		<td><input type='text' name="pengguna_nm_rek" value='<?php echo "$data[pengguna_nm_rek]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>No Rekening</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_rek" value='<?php echo "$data[pengguna_rek]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Username</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_username" value='<?php echo "$data[pengguna_username]"; ?>' readonly /></td>
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
	</table>
	</div>
	
	<div class='mostnew3'>
	
	
	<table border='0' align='center' >

	<tr>
		<td>Nama</td> 
	</tr>
	<tr>
		<td><input type='text' name="pengguna_nama" value='<?php echo "$data[pengguna_nama]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Email</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_email" value='<?php echo "$data[pengguna_email]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>No Handphone</td>	
	</tr>
	<tr>
		<td><input type='text'  name="pengguna_hp" value='<?php echo "$data[pengguna_hp]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Alamat</td>	
	</tr>
	<tr>
		<td><textarea cols='25' rows='5' name="pengguna_alamat"><?php echo "$data[pengguna_alamat]";?></textarea></td>
	</tr>
	
	<tr>
		<td>Kota</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_kota" value='<?php echo "$data[pengguna_kota]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Kode Pos</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_kodepos" value='<?php echo "$data[pengguna_kodepos]"; ?>' /></td>
	</tr>

	<tr>
		<td>Kecamatan</td>	
	</tr>
	<tr>
		<td><input type='text' name="pengguna_kecamatan" value='<?php echo "$data[pengguna_kecamatan]"; ?>' /></td>
	</tr>
	
	<tr>
		<td>Provinsi</td>	
	</tr>
	
	<tr>
		<td><input type='text' name="pengguna_provinsi" value='<?php echo "$data[pengguna_provinsi]"; ?>' /></td>
	</tr>
	</form>
	</table>
	</div>
	
	
	</div></div></div>
		