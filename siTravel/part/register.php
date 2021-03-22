<?php
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
		$pengguna_username = $_POST['pengguna_username'];
		$pengguna_password = md5($_POST['pengguna_password']);
		

		
		$sql = mysql_query("insert into pengguna(pengguna_nama, 
								pengguna_email, 
								pengguna_hp, 
								pengguna_alamat, 
								pengguna_kecamatan, 
								pengguna_kota, 
								pengguna_kodepos, 
								pengguna_provinsi, 
								pengguna_nm_rek, 
								pengguna_rek, 
								pengguna_password, 
								pengguna_username)
									
								values('$pengguna_nama',
								'$pengguna_email',
								'$pengguna_hp',
								'$pengguna_alamat',
								'$pengguna_kecamatan',
								'$pengguna_kota',
								'$pengguna_kodepos',
								'$pengguna_provinsi',
								'$pengguna_nm_rek',
								'$pengguna_rek',
								'$pengguna_password',
								'$pengguna_username' )")or die(mysql_error());
								
		$sql2 = mysql_query("insert into admin(namalengkap,
								login_password, 
								login_username,
								login_level,
								status_admin)
									
								values('$pengguna_nama',
								'$pengguna_password',
								'$pengguna_username',
								'pelanggan',
								'Y')")or die(mysql_error());
			
		if ($sql && $sql2)
		{
			echo "<script>alert('Data berhasil disimpan');
						window.location='login.php';</script>";
		}
		else
		{
			echo "<script>alert('Data gagal disimpan');</script>";
		}
	}
?>
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<h4><b>Daftar Member </b></h4><br><br>
<div class="content4">

<?php 
	echo"<div class='mostnew3'>
	
	<form method='POST'>
	<table border='0' align='center' >

	
	<tr>
		<td>Kecamatan</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_kecamatan' required></td>
	</tr>
	
	<tr>
		<td>Provinsi</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_provinsi' required></td>
	</tr>
	<tr>
		<td>Atas Nama Rekening</td> 
	</tr>
	<tr>
		<td><input type='text' name='pengguna_nm_rek'></td>
	</tr>
	
	<tr>
		<td>No Rekening</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_rek' required></td>
	</tr>
	
	<tr>
		<td>Username</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_username' required></td>
	</tr>
	
	<tr>
		<td>Password</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_password' required></td>
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
		<td><input type='text' name='pengguna_nama'></td>
	</tr>
	
	<tr>
		<td>Email</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_email' required></td>
	</tr>
	
	<tr>
		<td>No Handphone</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_hp' required></td>
	</tr>
	
	<tr>
		<td>Alamat</td>	
	</tr>
	<tr>
		<td><textarea cols='25' rows='5' name='pengguna_alamat'></textarea></td>
	</tr>
	
	<tr>
		<td>Kota</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_kota' required></td>
	</tr>
	
	<tr>
		<td>Kode Pos</td>	
	</tr>
	<tr>
		<td><input type='text' name='pengguna_kodepos' required></td>
	</tr>

	
	</form>
	</table>
	</div>
	
	
		";?>
	</div></div></div>
		