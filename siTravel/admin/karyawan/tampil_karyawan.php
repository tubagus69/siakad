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
        <h2><i class="glyphicon glyphicon-user"></i> Karyawan</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
<?php
echo"<center>
<link rel='stylesheet' href='assets/css/styletampil.css' type='text/css'>
<p align='right'><input type='button' value='Input Data karyawan' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_karyawan';\"><br><br>
";
$query=mysql_query("select karyawan.*, shift.shift
					from karyawan, shift
					where karyawan.id_shift=shift.id_shift");
		echo "
				<th>ID Karyawan</th>
				<th>Nama Karyawan</th>
				<th>Foto</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th>Email</th>
				<th>Shift</th>
				<th>Aksi</th>";?>
				
				<?php
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>	
					<td>$data[id_karyawan]</td>
					<td>$data[nama_karyawan]</td>
					<td><img src='./photo/$data[foto_karyawan]' width='50px' height='50px'></td>
					<td>$data[alamat]</td>
					<td>$data[no_telp]</td>
					<td>$data[email]</td>
					<td>$data[shift]</td>
					<td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=isi_karyawan&&id_karyawan=$data[id_karyawan]'>
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