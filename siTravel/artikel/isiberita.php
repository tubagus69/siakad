<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact.css">
<div id='center2'>
<div class='kotak'>
<div class='center3'>
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
