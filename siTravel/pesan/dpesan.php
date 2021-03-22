<?php 

mysql_query("DELETE from contactus WHERE kode='$_GET[kode]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='utama.php?page2=lpesan'
	</script>";
?>
