<?php 
		
		$id_pemesanan = $_POST['id_pemesanan'];
		$id_jadwal = $_POST['id_jadwal'];
		
		$sql = mysql_query("insert into pemesanan(id_pemesanan,
													id_pengguna,
													
													id_jadwal
													)
									
								values('$id_pemesanan',
								'$_SESSION[login_username]',
								
								'$id_jadwal'
								)")or die(mysql_error());
								
		
		if ($sql)
		{
			echo "
						window.location='utama.php?page2=pesantravel';</script>";
		}
		else
		{
			echo "<script>alert('Data gagal disimpan');</script>";
		}
?>