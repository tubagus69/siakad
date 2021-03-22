<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">kendaraan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> kendaraan</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
<?php
echo"<center>
<link rel='stylesheet' href='assets/css/styletampil.css' type='text/css'>
<p align='right'><input type='button' value='Input Data kendaraan' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_kendaraan';\"><br><br>
";
$query=mysql_query("select * from kendaraan");
		echo "
				<th>ID kendaraan</th>
				<th>Merk</th>
				<th>Foto</th>
				<th>Transmisi</th>
				<th>Warna</th>
				<th>Aksi</th>";?>
				
				<?php
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>	
					<td>$data[id_kendaraan]</td>
					<td>$data[merk]</td>
					<td><img src='./photo/$data[foto_kendaraan]' width='50px' height='50px'></td>
					<td>$data[transmisi]</td>
					<td>$data[warna]</td>
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=isi_kendaraan&&id_kendaraan=$data[id_kendaraan]'>
                <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                Lihat Selengkapnya
            </a>
           
        </td>";
	}
		echo "</tr></table>";
		?></div>
    </div>
    </div>
    <!--/span-->