   <div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Jam Keberangkatan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-th"></i> Jam</h2>

       
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
		
		$sql= mysql_query("select jadwal.tujuan, jadwal.id_jadwal, jam_keberangkatan.*
					from jadwal, jam_keberangkatan
					where jadwal.id_jadwal=jam_keberangkatan.id_jadwal 
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
				$sql_ = mysql_query("select jadwal.tujuan, jadwal.id_jadwal, jam_keberangkatan.*
					from jadwal, jam_keberangkatan
					where jadwal.id_jadwal=jam_keberangkatan.id_jadwal 
									ORDER BY jam_keberangkatan.id_jam DESC LIMIT $batas,$item_per_page;");

	echo "<br>
";?>
<?php 
echo "<p align='right'><input type='button' value='Input Jam' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_jam';\"><br><br>

				<th>No</th>
				<th>Jam</th>
				<th>Destinasi</th>
				<th>Action</th>";
	while($data=mysql_fetch_array($sql_))
	{
		$nomor++;
		echo "<tr>
					<td>$nomor</td>
					<td>$data[jam]</td>
					<td>$data[id_jadwal] - $data[tujuan]</td>
					
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=edit_jam&&id_jam=$data[id_jam]'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='admin.php?page2=delete_jam&&id_jam=$data[id_jam]'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>";
	}
		echo "</tr></table>";
		?>
			
				<?php
	
			echo "<div class='page'><center><p><a href='?page2=tampil_jam&hal=$sebelum' class='navigasi' title='Sebelumnya'>< &nbsp;</a>";
					for ($i=1; $i <= $jumlah_hal; $i++)
					{
						echo " <a href='?page2=tampil_jam&hal=$i' class='numpage'>&nbsp; $i &nbsp;</a> ";
					}
					echo "<a href='?page2=tampil_jam&hal=$lanjut' class='navigasi' title='Selanjutnya'>&nbsp; ></a></p></center></div>
						</div>
    </div>
    </div>
  			";
?>
	
	