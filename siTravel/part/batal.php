<?php 
$sql = mysql_query("update detail_pemesanan set
					status_pemesanan='Batal',
					total='0'
					where id_pemesanan='$_GET[id_pemesanan]'")or die(mysql_error());
		
		
		if ($sql )
		{
			echo "<script>alert('Transaksi Berhasil Dibatalkan');
						window.location='utama.php?page2=travel';</script>";
		}
		else
		{
			echo "<script>alert('Data gagal disimpan');</script>";
		}
?>