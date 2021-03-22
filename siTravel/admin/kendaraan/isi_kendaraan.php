<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Kendaraan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Kendaraan</h2>

       
    </div>
            <div class="box-content">
<?php 
echo"<p align='left'>";

$id_kendaraan = $_GET['id_kendaraan'];
$exe = mysql_query ("select * from kendaraan where id_kendaraan='$_GET[id_kendaraan]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<a href="admin.php?page2=edit_kendaraan&&id_kendaraan=<?php echo $data['id_kendaraan']; ?>"><img src='../photo/2.png' align='center'></a>
<?php echo"<a href='admin.php?page2=delete_kendaraan&id_kendaraan=$data[id_kendaraan]&foto_kendaraan=$data[foto_kendaraan]&merk=$data[merk]'><img src='../photo/22.png' align='center'></a></td>	";?>						

<?php
echo"<table border='0'>
<tr><td width='30%' align='center'>";
echo "<img src='./photo/$data[foto_kendaraan]' width='130' align='center'></td></tr><tr>";
echo"<td width='70%'><br><p align='left'>Kode kendaraan : ";echo $data['id_kendaraan'];echo"<br>";
echo"<p align='left'>Nama kendaraan : ";echo $data['merk'];echo"<br>";
echo"<p align='left'>No Polisi : ";echo $data['no_polisi'];echo"<br>";
echo"<p align='left'>No Rangka : ";echo $data['no_rangka'];echo"<br>";
echo"<p align='left'>No Mesin : ";echo $data['no_mesin'];echo"<br>";
echo"<p align='left'>Warna : ";echo $data['warna'];echo"<br>";
echo"<p align='left'>Transmisi : ";echo $data['transmisi'];echo"<br>";

}
echo"</table>";
?>
</div></div> </div>