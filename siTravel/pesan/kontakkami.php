<?php 
if (isset($_POST['simpan']))
	{
	$subjek=$_POST['subjek'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	
		$masuk = mysql_query("insert into contactus(subjek,email,pesan,tgl) 
										  values 
												('$subjek','$email','$pesan',now())"); 
				if($masuk){ echo " <script> alert ('Pesan Berhasil Dikirim'); 
					window.location ='utama.php?page2=home'</script>"; 
						}
				else{ echo "<script> alert ('gagal dikirim'); 
					window.location='utama.php?page2=home'</script>"; 
					} 
					
	}
	
	$sqltampil = mysql_query("SELECT * FROM halaman");
	$hasil = mysql_fetch_array($sqltampil);
	$lokasi=$hasil['lokasi'];
	$telp=$hasil['telp'];
	$facebook=$hasil['facebook'];
	$twitter=$hasil['twitter'];
	$instagram=$hasil['instagram'];
	
?>
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">

<?php 
	echo"<div class='mostnew4'>
	
	<table border='0'>
	
	<tr>
		<td width='20%'><b>Lokasi </b></td><td></td><td> : </td><td width='3%'></td><td>$hasil[lokasi]</a></td></tr>
	
	<tr>
		<td><br><b>Telp</b></td><td></td><td> <br>: </td><td></td><td><br>$hasil[telp]</td>
	</tr>
	<tr>
		<td><br><br></td>
	</tr>
	<tr>
		<td><b>Join With Us</b></td>
	</tr>
	<tr>
		<td><br><br></td><td width='7%'><img src='admin/photo/mail.png' width='23px' height='23px'></td><td> : </td><td></td><td>$hasil[email]</a></td>
	</tr>
	<tr>
		<td><br><br></td><td width='7%'><img src='admin/photo/facebook.png'></td><td> : </td><td></td><td>$hasil[facebook]</a></td>
	</tr>
	<tr>
		<td><br><br></td><td><img src='admin/photo/twitter.png'></td><td> : </td><td></td><td>$hasil[twitter]</a></td>
	</tr>
	<tr>
		<td><br><br></td><td><img src='admin/photo/insta.gif' width='20px' height='20px'></td><td> : </td><td></td><td>$hasil[instagram]</a></td>
	</tr>
	<tr>
		<td><b>No Rekening</b></td>
	</tr>
	<tr>
		<td><br><br></td><td width='7%'></td><td> : </td><td></td><td>$hasil[rek]</td>
	</tr>
	<tr>
		<td><br><br></td><td width='7%'></td><td> : </td><td></td><td>$hasil[rek2]</td>
	</tr>
	
	</table>
	</div>
	
	
	<div class='mostnew3'>
	
	<form method='POST'>
	<table border='0' align='center' >
	<tr> <td align='center'><h3><b>Kontak Kami</b></h3></td></tr>
	<tr>
		<td>Nama</td> 
	</tr>
	<tr>
		<td><input type='text' name='subjek'></td>
	</tr>
	
	<tr>
		<td>Email</td>	
	</tr>
	<tr>
		<td><input type='text' name='email' required></td>
	</tr>
	
	<tr>
		<td>Pesan</td>	
	</tr>
	<tr>
		<td><textarea cols='25' rows='5' name='pesan'></textarea></td>
	</tr>
	

	<tr>
		<td align='center'><input type='submit' name='simpan' value='Simpan'><input type='reset' name='batal' value='Batal'></td>
	</tr>
	</form>
	</table>
	</div>
	
	
		";?>
	</div></div></div>
		