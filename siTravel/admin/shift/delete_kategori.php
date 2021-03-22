<?php 

mysql_query("DELETE from kategori WHERE kode_kategori='$_GET[kode_kategori]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='admin.php?page2=tampil_kategori'
	</script>";
?>
