
<link rel="stylesheet" type="text/css" href="css/mix.css">

<link rel='stylesheet' type='text/css' href='css/styletampil.css'>
<div class='kotak'>
<?php 
echo"<p align='left'>";

$kode = $_GET['kode'];
$exe = mysql_query ("select * from contactus where kode='$_GET[kode]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<?php echo"<div class='quicknew'><a href='utama.php?page2=dpesan&kode=$data[kode]'><img src='photo/22.png' align='center'></a></div><br>	";?>						

<?php
echo"<table border='0' align='center'>";
echo"<tr><th><p align='left'>Kode </th></tr><tr><td><p align='center'>";echo $data['kode'];echo"</td></tr>";
echo"<tr><th><p align='left'>Tanggal Pesan</th></tr><tr><td><p align='center'> ";echo $data['tgl'];echo"</td></tr>";
echo"<tr><th><p align='left'>Subjek</th></tr><tr><td><p align='center'>";echo $data['subjek'];echo"</td></tr>";
echo"<tr><th><p align='left'>Email</th></tr><tr><td><p align='center'>";echo $data['email'];echo"</td></tr>";
echo"<tr><th><p align='left'>Pesan </th></tr><tr><td><p align='center'> ";echo $data['pesan'];echo"</td></tr>";

}
echo"</table>";
?></div>
