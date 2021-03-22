<?php

	$sql= mysql_query("select * from halaman") or die(mysql_error());
	$data=mysql_fetch_array($sql);
	
	$sqltampil = mysql_query("SELECT * FROM admin ");
	$hasil = mysql_fetch_array($sqltampil);
	
	$login_username=$hasil['login_username'];	
	$login_password=$hasil['login_password'];
	
	if (isset($_POST['simpan']))
{	
	$judulweb= $_POST['judulweb'];
	$deskripsi = $_POST['deskripsi'];
	$lokasi=$_POST['lokasi'];

	
	$telp=$_POST['telp'];
	$email=$_POST['email'];
	$rek=$_POST['rek'];
	$rek2=$_POST['rek2'];
	
	$facebook=$_POST['facebook'];
	$twitter=$_POST['twitter'];
	$instagram=$_POST['instagram'];
	
	$passwordlama =MD5($_POST['passwordlama']);
	$passwordbaru =MD5($_POST['passwordbaru']);
	$konfirmasipassword =MD5($_POST['konfirmasipassword']);
	$username = $_POST['username'];
	
	$cekuser = "select * from admin where login_username = '$username' and login_password = '$passwordlama'";
	$querycekuser = mysql_query($cekuser);
	$count = mysql_num_rows($querycekuser);
			
			
			
	if (isset($_FILES['logo']['tmp_name']))
			{
				$dir ="./photo/";
				$logo = $_FILES['logo']['name'];
				if (is_uploaded_file($_FILES['logo']['tmp_name']))
				{
					move_uploaded_file($_FILES['logo']['tmp_name'], $dir.$logo);
					$sqlfoto6 = mysql_query("UPDATE halaman SET logo='$logo'");
				}
			}
			
	if (isset($_FILES['foto']['tmp_name']))
			{
				$dir ="./photo/";
				$foto = $_FILES['foto']['name'];
				if (is_uploaded_file($_FILES['foto']['tmp_name']))
				{
					move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$foto);
					$sqlfoto7 = mysql_query("UPDATE halaman SET foto='$foto'");
				}
			}
								
			
	$sqlupdate = mysql_query("UPDATE halaman SET judulweb='$judulweb', 
												deskripsi='$deskripsi',
												lokasi='$lokasi',
												
												telp='$telp',
												email='$email',
												rek='$rek',
												rek2='$rek2',
												
												facebook='$facebook',
												twitter='$twitter',
												instagram='$instagram'
												
												");
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); window.location='admin.php?page2=home'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
			
	
			if ($count >= 1)
			{
			$updatepassword ="UPDATE admin set login_password='$passwordbaru'";
			$updatequery = mysql_query($updatepassword);
			if($updatequery)
			{
			"Password telah diganti menjadi $passwordbaru";
			echo"<script> alert ('Passord telah diganti');
					window.location='admin.php?page2=home'
				</script>";
			}
			}
}
?>


<form method="post" enctype="multipart/form-data">
<div class="full_w"><div class="h_title"><b>Pengaturan Situs</b></div></div>
	<table>
		<tr>
			<td><br>Judul Web</td>
			<td><br><input type="text" name="judulweb" required value='<?php echo "$data[judulweb]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>Logo</td>
			<td><br><br><img src='./photo/<?php echo "$data[logo]"; ?>' width='40px' height='40px'><br><input type="file" name="logo"></td>
		</tr>
		<tr>
			<td><br><br>Foto</td>
			<td><br><br><img src='./photo/<?php echo "$data[foto]"; ?>' width='40px' height='40px'><br><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td><br><br>Deskripsi</td>
			<td>
				<br><br><pre><textarea name="deskripsi" class="detail" cols='55' rows='5' required><?php echo "$data[deskripsi]"; ?></textarea></pre>
			</td>
		</tr>
		<tr>
			<td><br>Lokasi</td>
			<td>
				<br><pre><textarea name="lokasi" class="detail" cols='55' rows='5' required><?php echo "$data[lokasi]"; ?></textarea></pre>
			</td>
		</tr>
		<tr>
			<td><br>Tahun</td>
			<td><br><input type="text" name="tahun" required value='<?php echo "$data[tahun]"; ?>'></td>
		</tr>
	</table><br><hr width='100%'>
	<div class="full_w"><div class="h_title"><b>Pengaturan Kata Sandi</b></div></div>
	<table>
		<tr>
			<td><br><br>Username	</td>
			<td><br><br><input type="text" name="username" type="text" value="<?php echo $login_username; ?>" readonly></td>
		</tr>
		<tr>
			<td><br><br>Kata Sandi Yang Berlaku	</td>
			<td><br><br><input name="passwordlama" type="password"></td>
		</tr>
		<tr>
			<td><br><br>Kata Sandi Baru</td>
			<td><br><br><input name="passwordbaru" type="password"></td>
		</tr>
		<tr>
			<td><br><br>Ketik Ulang Kata Sandi Baru</td>
			<td><br><br><input name="konfirmasipassword" type="password"></td>
		</tr>
		
		
	</table><br><hr width='100%'>
	<div class="full_w"><div class="h_title"><br><b>Data Penjual</b></div></div>
	<table>
		<tr>
			<td><br><br>No Telepon</td>
			<td><br><br><input type="text" name="telp" required value='<?php echo "$data[telp]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>Email</td>
			<td><br><br><input type="text" name="email" required value='<?php echo "$data[email]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>No Rekening 1</td>
			<td><br><br><input type="text" name="rek" required value='<?php echo "$data[rek]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>No Rekening 2</td>
			<td><br><br><input type="text" name="rek2" required value='<?php echo "$data[rek2]"; ?>'></td>
		</tr>
		
	</table><br><hr width='100%'>
<div class="full_w"><div class="h_title"><br><b>Sosial Media</b></div></div>
	<table>
		<tr>
			<td><br><br>Facebook</td>
			<td><br><br><input type="text" name="facebook" required value='<?php echo "$data[facebook]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>Twitter</td>
			<td><br><br><input type="text" name="twitter" required value='<?php echo "$data[twitter]"; ?>'></td>
		</tr>
		<tr>
			<td><br><br>Instagram</td>
			<td><br><br><input type="text" name="instagram" required value='<?php echo "$data[instagram]"; ?>'></td>
		</tr>
	</table><br><hr width='100%'>
	<div class="form-group">
										<input class="btn btn-primary" type='submit' value='Simpan' name='simpan'>
										<br><br>
										</div>
</form></div>