
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>

<?php
		if($_SESSION['login_level']=="karyawan") {
?>
<div class="content4">
	<div class='kotak'>
<center>
<?php 
echo"";

$exe = mysql_query ("select *from artikel where id='$_GET[id]'");
while($data = mysql_fetch_array($exe)){
echo"<h4><div class='tutupcenter'>";echo "<b>$data[judul]</b>";echo"</div></h4><br><div id='bungkusisi'>";
?>
<p align="right">
<a href="utama.php?page2=eartikel&id=<?php echo $data['id']; ?>">Edit</a> | 
<?php echo"<a href='utama.php?page2=dartikel&id=$data[id]&gambar=$data[gambar]'>Delete</a><br>";?>

<?php
echo"<p align='left'>";
echo $data['tgl_posting']; 
echo "</p><center>";
 echo "<img src='./photo/$data[gambar]' width='150px' height='150px'>";echo"</center><br><br><br>";
echo"<p align='justify'>";echo $w=nl2br($data['isi']); 
}
echo"</p></center></table>";
?></div></div></div>

<?php }elseif($_SESSION['login_level']=="admin") {?>
<div class="content4">
	<div class='kotak'>
<center>
<?php 
echo"";

$exe = mysql_query ("select *from artikel where id='$_GET[id]'");
while($data = mysql_fetch_array($exe)){
echo"<h4><div class='tutupcenter'>";echo "<b>$data[judul]</b>";echo"</div></h4><br><div id='bungkusisi'>";
?>

<?php
echo"<p align='left'>";
echo $data['tgl_posting']; 
echo "</p><center>";
 echo "<img src='./photo/$data[gambar]' width='150px' height='150px'>";echo"</center><br><br><br>";
echo"<p align='justify'>";echo $w=nl2br($data['isi']); 
}
echo"</p></center></table>";
?></div></div></div>
<?php }elseif($_SESSION['login_level']=="pelanggan") {?>
<div class="content4">
	<div class='kotak'>
<center>
<?php 
echo"";

$exe = mysql_query ("select *from artikel where id='$_GET[id]'");
while($data = mysql_fetch_array($exe)){
echo"<h4><div class='tutupcenter'>";echo "<b>$data[judul]</b>";echo"</div></h4><br><div id='bungkusisi'>";
?>

<?php
echo"<p align='left'>";
echo $data['tgl_posting']; 
echo "</p><center>";
 echo "<img src='./photo/$data[gambar]' width='150px' height='150px'>";echo"</center><br><br><br>";
echo"<p align='justify'>";echo $w=nl2br($data['isi']); 
}
echo"</p></center></table>";
?></div></div></div>
<?php } ?>