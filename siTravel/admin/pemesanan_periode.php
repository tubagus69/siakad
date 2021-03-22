   <div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Tanggal Keberangkatan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-th"></i> Tanggal</h2>

       
    </div>
    <div class="box-content">
		<form method="POST">
		<table><tr>
					<th><font color='#33211d'>Dari <input type="date" name="tanggal1" class="form-control"></th>
					<th><font color='#33211d'> Sampai <input type="date" name="tanggal2" class="form-control"> </th>
					<th><br><input type="submit" value="Cari" class='btn btn-primary'  name="tanggal" class="form-submit"></th>
				</tr>
				
		</table>
		</form>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

<?php
error_reporting(0);
$tanggal_sekarang = date("Ymd");
if(isset($_POST['tanggal']))
{
	
$tanggal1 = $_POST['tanggal1'];
$tanggal2 = $_POST['tanggal2'];

		$item_per_page = 10;
					if (isset($_GET['hal']))
					{
						$page = $_GET['hal'];
					}
					else
					{
						$page = 1;
					}
		
		$sql= mysql_query("select DISTINCT (pemesanan.id_pemesanan), pemesanan.*, 
					pengguna.pengguna_nama,
					jadwal.tujuan, jadwal.biaya,
					kendaraan.merk, kendaraan.id_kendaraan,
					pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
					tanggal_keberangkatan.tanggal, 
					jam_keberangkatan.jam,
					detail_pemesanan.total
from pemesanan, pengguna, jadwal, kendaraan, detail_pemesanan, pengemudi, tanggal_keberangkatan, jam_keberangkatan
where pemesanan.id_jadwal = jadwal.id_jadwal
and pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
and pengguna.pengguna_username = pemesanan.id_pengguna
and pemesanan.id_jam=jam_keberangkatan.id_jam
and pemesanan.id_tanggal=tanggal_keberangkatan.id_tanggal
and jadwal.id_kendaraan = kendaraan.id_kendaraan
and jadwal.id_pengemudi = pengemudi.id_pengemudi
					and pemesanan.tgl_pesan between '$tanggal1' and '$tanggal2'") or die(mysql_error());
							
	
	
		
		$jumlah_data = mysql_num_rows($sql);
					$jumlah_hal = ceil($jumlah_data/$item_per_page);
					if ($page > $jumlah_hal)
					{
						$page = $jumlah_hal;
					}
					$lanjut = $page + 1;
					$sebelum = $page - 1;
					
					$batas = ($page-1) * $item_per_page;
				$sql_ = mysql_query("select DISTINCT (pemesanan.id_pemesanan), pemesanan.*, 
					pengguna.pengguna_nama,
					jadwal.tujuan, jadwal.biaya,
					kendaraan.merk, kendaraan.id_kendaraan,
					pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
					tanggal_keberangkatan.tanggal, 
					jam_keberangkatan.jam,
					detail_pemesanan.total
from pemesanan, pengguna, jadwal, kendaraan, detail_pemesanan, pengemudi, tanggal_keberangkatan, jam_keberangkatan
where pemesanan.id_jadwal = jadwal.id_jadwal
and pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
and pengguna.pengguna_username = pemesanan.id_pengguna
and pemesanan.id_jam=jam_keberangkatan.id_jam
and pemesanan.id_tanggal=tanggal_keberangkatan.id_tanggal
and jadwal.id_kendaraan = kendaraan.id_kendaraan
and jadwal.id_pengemudi = pengemudi.id_pengemudi
					and pemesanan.tgl_pesan between '$tanggal1' and '$tanggal2'
									ORDER BY tanggal_keberangkatan.id_tanggal DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "
				<th>ID Pemesanan</th>
				<th>Nama</th>
				<th>Tanggal Pesan</th>
				<th>Tujuan</th>
				<th>Tanggal Berangkat</th>
				<th>Biaya</th>
				<th>Jumlah Pesan</th>
				<th>Total Bayar</th>
				<th>ID Pengemudi</th>
				<th>ID Kendaraan</th>
				<th>Status Jalan</th>
				";?>
				
				<?php
	while($data=mysql_fetch_array($sql_))
	{
		$jalan = $data['status_jalan'];
	
	if ($jalan == 1)
	{
		$status_jalan = 'Satu Kali Jalan';
	}
	elseif ($jalan == 2)
	{
		$status_jalan = 'Pulang Pergi';
	}
	else
	{
		$status_jalan = 'Salah';
	}
		echo "<tr>	
					<td>$data[id_pemesanan]</td>
					<td>$data[pengguna_nama]</td>
					<td>$data[tgl_pesan]</td>
					<td>$data[tujuan]</td>
					<td>$data[tanggal], $data[jam]</td>
					<td>$data[biaya]</td>
					<td>$data[jml_pesan]</td>
					<td>$data[total]</td>
					<td>$data[id_pengemudi] - $data[nama_pengemudi]</td>
					<td>$data[id_kendaraan] - $data[merk]</td>
					<td>$status_jalan</td>
					";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=pemesanan_periode&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=pemesanan_periode&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=pemesanan_periode&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";

	
	
}else{
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
		
		$sql= mysql_query("select DISTINCT (pemesanan.id_pemesanan), pemesanan.*, 
					pengguna.pengguna_nama,
					jadwal.tujuan, jadwal.biaya,
					kendaraan.merk, kendaraan.id_kendaraan,
					pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
					tanggal_keberangkatan.tanggal, 
					jam_keberangkatan.jam,
					detail_pemesanan.total
from pemesanan, pengguna, jadwal, kendaraan, detail_pemesanan, pengemudi, tanggal_keberangkatan, jam_keberangkatan
where pemesanan.id_jadwal = jadwal.id_jadwal
and pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
and pengguna.pengguna_username = pemesanan.id_pengguna
and pemesanan.id_jam=jam_keberangkatan.id_jam
and pemesanan.id_tanggal=tanggal_keberangkatan.id_tanggal
and jadwal.id_kendaraan = kendaraan.id_kendaraan
and jadwal.id_pengemudi = pengemudi.id_pengemudi

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
				$sql_ = mysql_query("select DISTINCT (pemesanan.id_pemesanan), pemesanan.*, 
					pengguna.pengguna_nama,
					jadwal.tujuan, jadwal.biaya,
					kendaraan.merk, kendaraan.id_kendaraan,
					pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
					tanggal_keberangkatan.tanggal, 
					jam_keberangkatan.jam,
					detail_pemesanan.total
from pemesanan, pengguna, jadwal, kendaraan, detail_pemesanan, pengemudi, tanggal_keberangkatan, jam_keberangkatan
where pemesanan.id_jadwal = jadwal.id_jadwal
and pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
and pengguna.pengguna_username = pemesanan.id_pengguna
and pemesanan.id_jam=jam_keberangkatan.id_jam
and pemesanan.id_tanggal=tanggal_keberangkatan.id_tanggal
and jadwal.id_kendaraan = kendaraan.id_kendaraan
and jadwal.id_pengemudi = pengemudi.id_pengemudi

									ORDER BY pemesanan.id_pemesanan DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "
				<th>ID Pemesanan</th>
				<th>Nama</th>
				<th>Tanggal Pesan</th>
				<th>Tujuan</th>
				<th>Tanggal Berangkat</th>
				<th>Biaya</th>
				<th>Jumlah Pesan</th>
				<th>Total Bayar</th>
				<th>ID Pengemudi</th>
				<th>ID Kendaraan</th>
				<th>Status Jalan</th>
				";?>
				
				<?php
	while($data=mysql_fetch_array($sql_))
	{
		$jalan = $data['status_jalan'];
	
	if ($jalan == 1)
	{
		$status_jalan = 'Satu Kali Jalan';
	}
	elseif ($jalan == 2)
	{
		$status_jalan = 'Pulang Pergi';
	}
	else
	{
		$status_jalan = 'Salah';
	}
		echo "<tr>	
					<td>$data[id_pemesanan]</td>
					<td>$data[pengguna_nama]</td>
					<td>$data[tgl_pesan]</td>
					<td>$data[tujuan]</td>
					<td>$data[tanggal], $data[jam]</td>
					<td>$data[biaya]</td>
					<td>$data[jml_pesan]</td>
					<td>$data[total]</td>
					<td>$data[id_pengemudi] - $data[nama_pengemudi]</td>
					<td>$data[id_kendaraan] - $data[merk]</td>
					<td>$status_jalan</td>
					";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=pemesanan_periode&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=pemesanan_periode&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=pemesanan_periode&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>";
}
?></div></div></div>
    </div>
    </div>