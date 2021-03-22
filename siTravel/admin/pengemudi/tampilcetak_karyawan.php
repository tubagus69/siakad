<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Karyawan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Cetak Data Karyawan</h2>

       
    </div>
    <div class="box-content">
   <p align='right'><a href="karyawan/cetakseluruh_karyawan.php" target="_blank"><img src='../photo/cetak.png' align='center'></a>
				
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
<?php
echo"<center>
<link rel='stylesheet' href='assets/css/styletampil.css' type='text/css'>
";
$query=mysql_query("select * from karyawan");
		echo "
				<th>Kode karyawan</th>
				<th>Nama karyawan</th>
				<th>Foto karyawan</th>
				<th>Aksi</th>";?>
				
				<?php
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>	
					<td>$data[id_karyawan]</td>
					<td>$data[nama_karyawan]</td>
					<td><img src='../photo/$data[foto_karyawan]' width='50px' height='50px'></td>
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=isicetak_karyawan&&id_karyawan=$data[id_karyawan]'>
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