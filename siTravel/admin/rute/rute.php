
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
	
<div class='centerkuota'>
<link rel='stylesheet' type='text/css' href='css/styletampil.css'>

<h4><p align='center'><b>Rute Perjalanan </b></p></h4>
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
		
		$sql= mysql_query("select jadwal.tujuan, jadwal.id_jadwal, rute.*
					from jadwal, rute
					where jadwal.id_jadwal=rute.id_jadwal 
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
				$sql_ = mysql_query("select jadwal.tujuan, jadwal.id_jadwal, rute.*
					from jadwal, rute
					where jadwal.id_jadwal=rute.id_jadwal 
									ORDER BY rute.id_rute DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "
				<table border='1' >
				<th>No</th>
				<th>Deskripsi Rute</th>
				<th>Alamat Jemput</th>
				<th>Destinasi</th>
				";
	while($data=mysql_fetch_array($sql_))
	{
		$nomor++;
		echo "<tr>
					<td align='left'>$nomor</td>
					<td align='left'>$data[deskripsi_rute]</td>
					
					<td align='left'>$data[alamat_jemput]</td>
					<td align='left'>$data[tujuan]</td>
					
					";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<br><br><div class='page'><center><p><a href='?page2=rute&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=rute&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=rute&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?>