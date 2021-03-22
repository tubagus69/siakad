<?php 
$foto_pengemudi="./photo/".$_GET['foto_pengemudi'];
$query=mysql_query("DELETE from pengemudi WHERE id_pengemudi='$_GET[id_pengemudi]'");
unlink($foto_pengemudi);
	
	if($query)
	{
		echo "<script> alert ('Berhasil di Hapus');
			window.location='admin.php?page2=tampil_pengemudi';</script>";
	}
	else 
	{
		echo "<script> alert ('Gagal Hapus');
			window.location='admin.php?page2=home';</script>";
	}
?>
