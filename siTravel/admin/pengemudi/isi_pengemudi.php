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
<?php 
echo"<p align='left'>";

$id_pengemudi = $_GET['id_pengemudi'];
$exe = mysql_query ("select pengemudi.*, kendaraan.merk
					from pengemudi, kendaraan
					where pengemudi.id_kendaraan= kendaraan.id_kendaraan
					and pengemudi.id_pengemudi='$_GET[id_pengemudi]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<a href="admin.php?page2=edit_pengemudi&&id_pengemudi=<?php echo $data['id_pengemudi']; ?>"><img src='../photo/2.png' align='center'></a>
<?php echo"<a href='admin.php?page2=delete_pengemudi&id_pengemudi=$data[id_pengemudi]&foto_pengemudi=$data[foto_pengemudi]&nama_pengemudi=$data[nama_pengemudi]'><img src='../photo/22.png' align='center'></a></td>	";?>						

<?php
echo"<table border='0'>
<tr><td width='30%' align='center'>";
echo "<img src='./photo/$data[foto_pengemudi]' width='130' align='center'></td></tr><tr>";
echo"<td width='70%'><br><p align='left'>Kode pengemudi : ";echo $data['id_pengemudi'];echo"<br>";
echo"<p align='left'>Nama pengemudi : ";echo $data['nama_pengemudi'];echo"<br>";
echo"<p align='left'>Alamat pengemudi : ";echo $data['alamat'];echo"<br>";
echo"<p align='left'>No Telp pengemudi : ";echo $data['no_telp'];echo"<br>";
echo"<p align='left'>ID Kendaraan : ";echo $data['id_kendaraan'];echo"-";echo $data['merk'];echo"<br>";

}
echo"</table>";
?>
</div></div> </div>