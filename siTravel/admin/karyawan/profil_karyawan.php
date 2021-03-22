<div id='wrappermostbuku2'>
<?php 
echo"<p align='left'>";

$exe = mysql_query ("select * from karyawan where username='$_SESSION[login_username]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<a href="utama.php?page2=edit_profil&&id_karyawan=<?php echo $data['id_karyawan']; ?>"><img src='photo/edit.png' width='18px' height='18px' align='center'></a>
<p align='center'><h4><b>Pengaturan Profil</b></h4></p>
<?php
echo"<table border='0' align='center'>
<tr><td width='30%' align='center'>";
echo "<img src='./photo/$data[foto_karyawan]' width='130' align='center'></td></tr><tr>";
echo"<td width='70%'>
<p align='left'><div class='profilkaryawan'>ID Karyawan : ";echo $data['id_karyawan'];
echo"<p align='left'>Nama : ";echo $data['nama_karyawan'];echo"<br>";
echo"<p align='left'>Alamat : ";echo $data['alamat'];echo"<br>";
echo"<p align='left'>No Telp : ";echo $data['no_telp'];echo"<br>";
echo"<p align='left'>Email : ";echo $data['email'];echo"<br>";
echo"<center><p align='left'>Status : ";echo $data['status_karyawan'];echo"<br>
</td></tr>";

}
echo"</table>";
?>
</div>