<?php 

mysql_query("DELETE from tanggal_keberangkatan WHERE id_tanggal='$_GET[id_tanggal]'");
echo"<script> alert ('Data Telah Berhasil Di Hapus');
		window.location='admin.php?page2=tampil_tanggal'
	</script>";
?>
