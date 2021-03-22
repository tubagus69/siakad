   <div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Jadwal Keberangkatan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-th"></i> Jadwal</h2>

       
    </div>
    <div class="box-content">
		
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">

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
		
		$sql= mysql_query("select jadwal.*, 
kendaraan.merk, kendaraan.id_kendaraan,
pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
jam_keberangkatan.jam,
tanggal_keberangkatan.tanggal
from jadwal, kendaraan, pengemudi, jam_keberangkatan, tanggal_keberangkatan
where jadwal.id_kendaraan=kendaraan.id_kendaraan
and jadwal.id_pengemudi=pengemudi.id_pengemudi
and jadwal.id_jadwal = jam_keberangkatan.id_jadwal
and jadwal.id_jadwal = tanggal_keberangkatan.id_jadwal
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
		$sql_ = mysql_query("select jadwal.*, 
kendaraan.merk, kendaraan.id_kendaraan,
pengemudi.nama_pengemudi, pengemudi.id_pengemudi,
jam_keberangkatan.jam,
tanggal_keberangkatan.tanggal
from jadwal, kendaraan, pengemudi, jam_keberangkatan, tanggal_keberangkatan
where jadwal.id_kendaraan=kendaraan.id_kendaraan
and jadwal.id_pengemudi=pengemudi.id_pengemudi
and jadwal.id_jadwal = jam_keberangkatan.id_jadwal
and jadwal.id_jadwal = tanggal_keberangkatan.id_jadwal
									ORDER BY jadwal.id_jadwal DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "
				<th>No </th>
				<th>ID Jadwal</th>
				<th>Tujuan</th>
				<th>Biaya</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Jumlah Kursi</th>
				<th>Kendaraan</th>
				<th>Pengemudi</th>
			";
	while($data=mysql_fetch_array($sql_))
	{
		$nomor++;
		echo "<tr>
					<td>$nomor</td>
					<td>$data[id_jadwal]</td>
					<td>$data[tujuan]</td>
					<td>$data[biaya]</td>
					<td>$data[tanggal]</td>
					<td>$data[jam]</td>
					<td>$data[jumlah_kursi]</td>
					<td>$data[id_kendaraan] - $data[merk]</td>
					<td>$data[id_pengemudi] - $data[nama_pengemudi]</td>
					";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=tampil_jadwal&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=tampil_jadwal&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=tampil_jadwal&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?>
	
	