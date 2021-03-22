<?php 

mysql_query("DELETE from jadwal WHERE id_jadwal='$_GET[id_jadwal]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='admin.php?page2=tampil_tujuan'
	</script>";
?>
