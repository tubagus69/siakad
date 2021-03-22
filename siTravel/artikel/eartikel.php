<?php

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$sqltampil = mysql_query("SELECT * FROM artikel WHERE id='$id'");
	$hasil = mysql_fetch_array($sqltampil);
			$judul = $hasil['judul'];
			$isi=$hasil['isi'];
			$tgl_posting=$hasil['tgl_posting'];
			$gambar = $hasil['gambar'];
			
if (isset($_POST['simpan']))
{
			$judul = $_POST['judul'];
			$isi=$_POST['isi'];
	
			
			if (isset($_FILES['gambar']['tmp_name']))
			{
				$dir ="./photo/";
				$gambar = $_FILES['gambar']['name'];
				if (is_uploaded_file($_FILES['gambar']['tmp_name']))
				{
					move_uploaded_file($_FILES['gambar']['tmp_name'], $dir.$gambar);
					$sqlfoto = mysql_query("UPDATE artikel SET gambar='$gambar' WHERE id='$id'");
				}
			}
	$sqlupdate = mysql_query("UPDATE artikel SET judul='$judul', isi='$isi', tgl_posting=now() WHERE id='$id'") or die (mysql_error());
	if ($sqlupdate)
			{
				echo "<script> alert('Data berhasil disimpan'); window.location='utama.php?page2=isiartikel&id=$id'; </script>";
			}
			else
			{
				echo "<script> alert('Data gagal disimpan');</script>";
			}
}
}
else{
	echo "Tidak ada id yang dipilih !!!";
}
?>


<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
<h4><p align="center"><b>Edit Berita</h4></b></p>


<center><br>
<table border="0">
<form method="post" enctype="multipart/form-data">
	<tr>
		<td><b>Judul</b></td>
	</tr>
	<tr>
		<td><input type="text" name="judul" value="<?php echo $judul; ?>"></td>
	</tr>
	
	<tr>
	<td><b>Isi</b></td>
	</tr>
	<tr>
		<td><textarea cols="80%" rows="20" name="isi" id="elm2" required><?php echo $isi; ?></textarea></td>
		
	</tr>
	
		<tr>
		<td><b>Gambar</b></td>
	</tr>
	<tr>
		<td><img src="./photo/<?php echo $gambar; ?>" width="50px" height="50px" /><br>
	   <input type="file" name="gambar" /></td>
	</tr>
	
		
		<tr>
		<td colspan="3" align="center"><br><input type="submit" name="simpan" value="Simpan" /> <input type="button" value="Kembali" onClick="self.history.back()"></td>
         </tr>
	</table>
</form></div></div></div>
