<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Pengemudi</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Pengemudi</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
<?php
echo"<center>
<link rel='stylesheet' href='assets/css/styletampil.css' type='text/css'>
<p align='right'><input type='button' value='Input Data Pengemudi' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_pengemudi';\"><br><br>
";
$query=mysql_query("select * from pengemudi");
		echo "
				<th>ID Pengemudi</th>
				<th>Nama Pengemudi</th>
				<th>Foto</th>
				<th>No Telepon</th>
				<th>Aksi</th>";?>
				
				<?php
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>	
					<td>$data[id_pengemudi]</td>
					<td>$data[nama_pengemudi]</td>
					<td><img src='./photo/$data[foto_pengemudi]' width='50px' height='50px'></td>
			
					<td>$data[no_telp]</td>
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=isi_pengemudi&&id_pengemudi=$data[id_pengemudi]'>
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