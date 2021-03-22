<?php 
$foto_kendaraan="./photo/".$_GET['foto_kendaraan'];
$query=mysql_query("DELETE from kendaraan WHERE id_kendaraan='$_GET[id_kendaraan]'");
unlink($foto_kendaraan);
	
	if($query)
	{
		echo "<script> alert ('Berhasil di Hapus');
			window.location='admin.php?page2=tampil_kendaraan';</script>";
	}
	else 
	{
		echo "<script> alert ('Gagal Hapus');
			window.location='admin.php?page2=home';</script>";
	}
?>
