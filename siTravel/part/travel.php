
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
		
		$sql= mysql_query("select pemesanan.*, detail_pemesanan.status_pemesanan, rute.alamat_jemput, jadwal.tujuan
					from pemesanan, detail_pemesanan, rute, jadwal
					where pemesanan.id_pemesanan= detail_pemesanan.id_pemesanan
					and rute.id_jadwal=pemesanan.id_jadwal
					and jadwal.id_jadwal=pemesanan.id_jadwal
					and pemesanan.id_pengguna='$_SESSION[login_username]'
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
				$sql_ = mysql_query("select pemesanan.*, detail_pemesanan.status_pemesanan, rute.alamat_jemput, jadwal.tujuan
					from pemesanan, detail_pemesanan, rute, jadwal
					where pemesanan.id_pemesanan= detail_pemesanan.id_pemesanan
					and jadwal.id_jadwal=pemesanan.id_jadwal
					and rute.id_jadwal=pemesanan.id_jadwal
					and pemesanan.id_pengguna='$_SESSION[login_username]'
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
				<th colspan='2'>Aksi</th>
				
				";
	while($data=mysql_fetch_array($sql_))
		
	{
		$status=$data['status_pemesanan'];
		echo "<tr>
					<td>$data[id_pemesanan]</td>
					<td>$data[id_jadwal] - $data[tujuan]</td>
					<td>$data[alamat_jemput]</td>
					<td>$data[jml_pesan]</td>
					<td>$data[status_pemesanan]</td>
					<td> <a href='utama.php?page2=isi_travel&&id_pemesanan=$data[id_pemesanan]&&id_pengguna=$_SESSION[login_username]'>Lihat Selengkapnya</a></td>
					";
					if ($status=='Menunggu')
					{
					echo"
					<td><a href='utama.php?page2=batal&&id_pemesanan=$data[id_pemesanan]&&id_pengguna=$_SESSION[login_username]'><img src='photo/delete.png' width='20px'>
            </a><br></td>
					";}
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<br><br><div class='page'><center><p><a href='?page2=travel&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=travel&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=travel&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?></div>