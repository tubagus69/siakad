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
		
		$sql= mysql_query("select jadwal.tujuan, jadwal.id_jadwal, tanggal_keberangkatan.*
					from jadwal, tanggal_keberangkatan
					where jadwal.id_jadwal=tanggal_keberangkatan.id_jadwal 
					and tanggal_keberangkatan.tanggal between '$tanggal1' and '$tanggal2'") or die(mysql_error());
							
	
	
		
		$jumlah_data = mysql_num_rows($sql);
					$jumlah_hal = ceil($jumlah_data/$item_per_page);
					if ($page > $jumlah_hal)
					{
						$page = $jumlah_hal;
					}
					$lanjut = $page + 1;
					$sebelum = $page - 1;
					
					$batas = ($page-1) * $item_per_page;
				$sql_ = mysql_query("select jadwal.tujuan, jadwal.id_jadwal, tanggal_keberangkatan.*
					from jadwal, tanggal_keberangkatan
					where jadwal.id_jadwal=tanggal_keberangkatan.id_jadwal 
					and tanggal_keberangkatan.tanggal between '$tanggal1' and '$tanggal2'
									ORDER BY tanggal_keberangkatan.id_tanggal DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "<p align='right'><input type='button' value='Input Tanggal' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_tanggal';\"><br><br>

				<th>No</th>
				<th>Tanggal</th>
				<th>Destinasi</th>
				<th>Action</th>";
	while($data=mysql_fetch_array($sql_))
	{
		$nomor++;
		echo "<tr>
					<td>$nomor</td>
					<td>$data[tanggal]</td>
					<td>$data[id_jadwal] - $data[tujuan]</td>
					
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=edit_tanggal&&id_tanggal=$data[id_tanggal]'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='admin.php?page2=delete_tanggal&&id_tanggal=$data[id_tanggal]'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=tampil_tanggal&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=tampil_tanggal&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=tampil_tanggal&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
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
		
		$sql= mysql_query("select jadwal.tujuan, jadwal.id_jadwal, tanggal_keberangkatan.*
					from jadwal, tanggal_keberangkatan
					where jadwal.id_jadwal=tanggal_keberangkatan.id_jadwal") or die(mysql_error());
							
	
	
		
		$jumlah_data = mysql_num_rows($sql);
					$jumlah_hal = ceil($jumlah_data/$item_per_page);
					if ($page > $jumlah_hal)
					{
						$page = $jumlah_hal;
					}
					$lanjut = $page + 1;
					$sebelum = $page - 1;
					
					$batas = ($page-1) * $item_per_page;
				$sql_ = mysql_query("select jadwal.tujuan, jadwal.id_jadwal, tanggal_keberangkatan.*
					from jadwal, tanggal_keberangkatan
					where jadwal.id_jadwal=tanggal_keberangkatan.id_jadwal
									ORDER BY tanggal_keberangkatan.id_tanggal DESC LIMIT $batas,$item_per_page;");

	echo "<p align='right'><input type='button' value='Input Tanggal' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_tanggal';\"><br><br>

				<th>No</th>
				<th>Tanggal</th>
				<th>Destinasi</th>
				<th>Action</th>";
	while($data=mysql_fetch_array($sql))
	{
		$nomor++;
		echo "<tr>
					<td>$nomor</td>
					<td>$data[tanggal]</td>
					<td>$data[id_jadwal] - $data[tujuan]</td>
					
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=edit_tanggal&&id_tanggal=$data[id_tanggal]'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='admin.php?page2=delete_tanggal&&id_tanggal=$data[id_tanggal]'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>";
	}
		echo "</tr></table>";
		?>
		
  					
				<?php
	
			echo "<div class='page'><center><p><a href='admin.php?page2=tampil_tanggal&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='admin.php?page2=tampil_tanggal&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='admin.php?page2=tampil_tanggal&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>";

	
	
}
?></div></div></div>
    </div>
    </div>