<?php 

mysql_query("DELETE from jam_keberangkatan WHERE id_jam='$_GET[id_jam]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='admin.php?page2=tampil_jam'
	</script>";
?>
