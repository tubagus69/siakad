<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Pelanggan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Pelanggan</h2>

       
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
		
		$sql= mysql_query("select * from pengguna 
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
				$sql_ = mysql_query("select * from pengguna
									ORDER BY pengguna_kode DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "		<th>Nomor</th>
				<th>Nama</th>
				<th>Email</th>
				<th>No Telepon</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Username</th>
				<th>No Rekening</th>
				";?>
				
				<?php
	while($data=mysql_fetch_array($sql_))
	{
		$nomor++;
		echo "<tr>	<td>$nomor</td>
					<td>$data[pengguna_nama]</td>
					<td>$data[pengguna_email]</td>
					<td>$data[pengguna_hp]</td>
					<td>$data[pengguna_email]</td>
					<td>$data[pengguna_alamat], $data[pengguna_kecamatan], $data[pengguna_kota], $data[pengguna_provinsi], $data[pengguna_kodepos]</td>
				
					<td>$data[pengguna_username]</td>
					<td>$data[pengguna_rek] an $data[pengguna_nm_rek]</td>
					";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=pelanggan&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=pelanggan&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=pelanggan&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?>
	
	