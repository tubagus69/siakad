<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">karyawan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Karyawan</h2>

       
    </div>
            <div class="box-content">
<?php 
echo"<p align='left'>";

$id_karyawan = $_GET['id_karyawan'];
$exe = mysql_query ("select * from karyawan, shift where id_karyawan='$_GET[id_karyawan]' AND karyawan.id_shift = shift.id_shift;");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<a href="admin.php?page2=edit_karyawan&&id_karyawan=<?php echo $data['id_karyawan']; ?>"><img src='../photo/2.png' align='center'></a>
<?php echo"<a href='admin.php?page2=delete_karyawan&id_karyawan=$data[id_karyawan]&foto_karyawan=$data[foto_karyawan]&nama_karyawan=$data[nama_karyawan]'><img src='../photo/22.png' align='center'></a></td>	";?>						

<?php
echo"<table border='0'>
<tr><td width='30%' align='center'>";
echo "<img src='./photo/$data[foto_karyawan]' width='130' align='center'></td></tr><tr>";
echo"<td width='70%'><br><p align='left'>Kode karyawan : ";echo $data['id_karyawan'];echo"<br>";
echo"<p align='left'>Nama karyawan : ";echo $data['nama_karyawan'];echo"<br>";
echo"<p align='left'>Alamat karyawan : ";echo $data['alamat'];echo"<br>";
echo"<p align='left'>No Telp karyawan : ";echo $data['no_telp'];echo"<br>";
echo"<p align='left'>Email karyawan : ";echo $data['email'];echo"<br>";
echo"<p align='left'>Jadwal Shift : ";echo $data['shift'];echo"<br>";
echo"<p align='left'>Status karyawan : ";echo $data['status_karyawan'];echo"<br>";
echo"<p align='left'>Username karyawan : ";echo $data['username'];echo"<br></td></tr>";

}
echo"</table>";
?>
</div></div> </div>