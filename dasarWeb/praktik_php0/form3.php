<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<?php 
		if(isset($_GET['error'])){
			$error=$_GET['error'];
		}
		else{
			$error="";
		}

		$pesan="";
		if($error=="variabel_belum_diset"){
			$pesan="Anda harus mengkases halaman ini dari form3.php";
		}
		else if($error=="nama_kosong"){
			$pesan="Anda harus mengakses halaman ini dari form3.php";
		}
		else if($error=="nama_invalid"){
			$pesan="Nama diisi hauruf dan spasi";
		}
		else if($error=="email_kosong"){
			$pesan="Email harus diisi";
		}
		if($error=="email_invalid"){
			$pesan="Email tidak sesuai";
		}

		if(isset($_GET['nama']) AND isset($_GET['email']) AND isset($_GET['komentar'])){
			$nama=$_GET['nama'];
			$email=$_GET['email'];
			$komentar=$_GET['komentar'];
		}else{
			$nama="";
			$email="";
			$komentar="";
		}
	?>

	<span class="error"><?php echo $pesan;?></span>

	<table>
		<form method="get" action="prosesForm3.php">
			<tr>
				<td> Nama: </td>
				<td> <input type="text" name="nama" value="<?php echo $nama;?>">
			</tr>
			<tr>
				<td> E-mail: </td>
				<td> <input type="text" name="email" value="<?php echo $email;?>">
			</tr>
			<tr>
				<td> Komentar: </td>
				<td> <textarea name="komentar" rows="5" cols="40"><?php echo $komentar;?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
		</form>
	</table>
</body>
</html>