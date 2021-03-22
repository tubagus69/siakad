
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
	
<div class='centerkuota'>
<link rel='stylesheet' type='text/css' href='css/styletampil.css'>

<h4><p align='center'><b>Riwayat Pemesanan</b></p></h4>
<?php
error_reporting(0);

		$item_per_page = 10;
					if (isset($_GET['hal']))
					{
						$page = $_GET['hal'];
					}
					else
					{
						$page = 1;
					}
		
		$sql= mysql_query("select pemesanan.*, detail_pemesanan.status_pemesanan
					from pemesanan, detail_pemesanan
					where pemesanan.id_pemesanan= detail_pemesanan.id_pemesanan
					and detail_pemesanan.status_pemesanan='Terkonfirmasi'
					") or die(mysql_error());
							
		$jumlah_data = mysql_num_rows($sql);
					$jumlah_hal = ceil($jumlah_data/$item_per_page);
					if ($page > $jumlah_hal)
					{
						$page = $jumlah_hal;
					}
					$lanjut = $page + 1;
					$sebelum = $page - 1;
					
					$batas = ($page-1) * $item_per_page;
				$sql_ = mysql_query("select pemesanan.*, detail_pemesanan.status_pemesanan
					from pemesanan, detail_pemesanan
					where pemesanan.id_pemesanan= detail_pemesanan.id_pemesanan
					and detail_pemesanan.status_pemesanan='Terkonfirmasi'
									ORDER BY pemesanan.id_pemesanan DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "<table border='1' align='center'>
				<th>ID Pemesanan</th>
				<th>ID Jadwal</th>
				<th>Alamat Jemput</th>
				<th>Jumlah Pesan</th>
				<th>Status Pemesanan</th>
				<th>Aksi</th>
				
				";
	while($data=mysql_fetch_array($sql_))
		
	{
		echo "<tr>
					<td>$data[id_pemesanan]</td>
					<td>$data[id_jadwal]</td>
					<td>$data[alamat_jemput]</td>
					<td>$data[jml_pesan]</td>
					<td>$data[status_pemesanan]</td>
					<td> <a href='utama.php?page2=isi_datatravel&&id_pemesanan=$data[id_pemesanan]&&id_pengguna=$_SESSION[login_username]'>
                    Lihat Selengkapnya</a> </td>
					";}
	
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<br><br><div class='page'><center><p><a href='?page2=riwayat_travel&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=riwayat_travel&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=riwayat_travel&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?></div>