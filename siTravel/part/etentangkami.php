<?php

if (isset($_GET['id_about']))
{
	$id_about = $_GET['id_about'];
	$sqltampil = mysql_query("SELECT * FROM about WHERE id_about='$id_about'");
	$hasil = mysql_fetch_array($sqltampil);
			
	$id_about = $hasil['id_about'];
	$judul = $hasil['judul'];
	$deskripsi=$hasil['deskripsi'];
	$photo=$hasil['photo'];
						
if (isset($_POST['simpan']))
{	
	$judul= $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	if (isset($_FILES['photo']['tmp_name']))
			{
				$dir ="./photo/";
				$photo = $_FILES['photo']['name'];
				if (is_uploaded_file($_FILES['photo']['tmp_name']))
				{
					move_uploaded_file($_FILES['photo']['tmp_name'], $dir.$photo);
					$sqlfoto = mysql_query("UPDATE about SET photo='$photo' WHERE id_about='$id_about'");
				}
			}
	$sqlupdate = mysql_query("UPDATE about SET judul='$judul', 
												deskripsi='$deskripsi'
												WHERE id_about='$id_about'");
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); window.location='utama.php?page2=tentangkami'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
}
}
else{
	echo "Tkode_petugasak ada kode_petugas yang dipilih !!!";
}
?><div class='center2'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact.css">
<h4><p align="center"><b>Edit Tentang Kami</h4></b></p>


<center><br>
	<form method='POST' enctype='multipart/form-data'>
	<table border='0' align='center' >
	
	<tr>
		<td><b>Judul</b></td> 
	</tr>
	<tr>
		<td><input type='text' name='judul' value="<?php echo $judul; ?>"></td>
	</tr>
	
	<tr>
		<td><b>Photo</b></td> 
	</tr>
	<tr>
		<td><img src="./photo/<?php echo $photo; ?>" width="50px" height="50px" />
	   <input type="file" name="photo" /></td>
	</tr>
	
	<tr>
		<td><br><b>Deskripsi</b></td> 
	</tr>
	<tr>
		<td><textarea cols="35" rows="15" name="deskripsi"><?php echo $deskripsi; ?></textarea></td>
	</tr>
	
		
	
			
		</td>
	</tr>
	
	<tr>
		<td><input type='submit' value='Simpan' name='simpan'><input type='reset' name='reset' value='Batal'></td>
		
	</tr>
	</form>
	</table></div>