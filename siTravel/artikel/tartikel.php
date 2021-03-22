<?php

	if (isset($_POST['simpan']))
	{
	$judul=$_POST['judul']; 
	$isi=$_POST['isi'];	
	$nama_photo=$_FILES['gambar']['name'];
		
		$uploaddir = './photo/'; $rnd = date ("his"); 
		$nama_file_upload=$nama_photo; 
		$alamatfile=$uploaddir.$nama_file_upload;
				
			if (move_uploaded_file($_FILES['gambar']['tmp_name'],$alamatfile)) 
				{ 
				$masuk = mysql_query("insert into artikel ( judul, isi, tgl_posting, username, gambar) values 
														  ('$judul', '$isi', now(), '$_SESSION[login_username]', '$nama_photo')")or die(mysql_error()); 
					if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
										window.location ='utama.php?page2=artikel'</script>"; 
							  }
					else{ echo "<script> alert ('gagal simpan'); 
								window.location='utama.php?page2=tartikel'</script>"; 
						} 
				} 
			
	}
?>		
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
<b><h4><p align="center">Tambah Berita</h4></b></p>

	<form method='POST' enctype='multipart/form-data'>
	<table border='0' align='center' >
	
	<tr>
		<td><b>Judul</b></td>
	</tr>
	<tr>
		<td><input type='text' name='judul'></td>
	</tr>
	
	<tr>
	<td><b>Isi</b></td>
	</tr>
	<tr>
		<td><textarea name="isi" cols='15' rows='5' requierd></textarea></td>
		
	</tr>
	
		<tr>
		<td><b>Gambar</b></td>
	</tr>
	<tr>
		<td><input type='file' name='gambar'></td>
	</tr>
	
		

	<tr>
		<td align='center'><input type='submit' value='Simpan' name='simpan'><input type='reset' name='reset' value='Batal'></td>
		
	</tr>
	</form>
	</table></div></div></div>