<div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Pesan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-inbox"></i> Pesan Masuk</h2>

       
    </div>
            <div class="box-content">
<link rel='stylesheet' type='text/css' href='../assets/css/styletampil.css'>
<?php 
echo"<p align='left'>";

$kode = $_GET['kode'];
$exe = mysql_query ("select * from contactus where kode='$_GET[kode]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<?php echo"<a href='admin.php?page2=delete_pesan&kode=$data[kode]'><img src='../photo/22.png' align='center'></a>	";?>						

<?php
echo"<table border='0' align='center'>";
echo"<tr><th><p align='left'>Kode </th></tr><tr><td><p align='center'>";echo $data['kode'];echo"</td></tr>";
echo"<tr><th><p align='left'>Tanggal Pesan</th></tr><tr><td><p align='center'> ";echo $data['tgl'];echo"</td></tr>";
echo"<tr><th><p align='left'>Subjek</th></tr><tr><td><p align='center'>";echo $data['subjek'];echo"</td></tr>";
echo"<tr><th><p align='left'>Email</th></tr><tr><td><p align='center'>";echo $data['email'];echo"</td></tr>";
echo"<tr><th><p align='left'>Pesan </th></tr><tr><td><p align='center'> ";echo $data['pesan'];echo"</td></tr>";

}
echo"</table>";
?>

</div></div> </div>