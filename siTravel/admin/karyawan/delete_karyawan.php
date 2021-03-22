<?php 
$foto_karyawan="./photo/".$_GET['foto_karyawan'];
$query=mysql_query("DELETE from karyawan WHERE id_karyawan='$_GET[id_karyawan]'");
$query2=mysql_query("DELETE from admin WHERE namalengkap='$_GET[nama_karyawan]'");
unlink($foto_karyawan);
	
	if($query && $query2)
	{
		echo "<script> alert ('Berhasil di Hapus');
			window.location='admin.php?page2=tampil_karyawan';</script>";
	}
	else 
	{
		echo "<script> alert ('Gagal Hapus');
			window.location='admin.php?page2=home';</script>";
	}
?>
