<?php 
$photo="./photo/".$_GET['gambar'];
$query=mysql_query("DELETE from artikel WHERE id='$_GET[id]'");
unlink($photo);
	
	if($query)
	{
		echo "<script> alert ('Berhasil di Hapus');
			window.location='utama.php?page2=artikel';</script>";
	}
	else 
	{
		echo "<script> alert ('Gagal Hapus');
			window.location='utama.php?page2=home';</script>";
	}
?>
