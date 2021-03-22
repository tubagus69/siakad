<?php 

mysql_query("DELETE from rute WHERE id_rute='$_GET[id_rute]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='admin.php?page2=tampil_rute'
	</script>";
?>
