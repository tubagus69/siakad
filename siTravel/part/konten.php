<?php
$page2=$_GET['page2'];
if($page2=="home"){
echo"<center>
	<div class='center2'>
	<div class='center3'>
	<link rel='stylesheet' type='text/css' href='./css/mix.css'>
	<p align='center' class='utamaselamat'><h3><p align='center'>Selamat Datang $_SESSION[login_username] </h3>
	Jangan lupa untuk selalu sign out setelah anda menggunakan halaman ini dan biasakan
	secara rutin untuk mengganti password admin anda setiap 1-2 bulan.<br><br></p></div></div>";
	include "part/terbaru.php";
	
	
}else if($page2=="menu"){
	include 'menu.php';
}else if($page2=="home"){
	include 'home.php';
}else if($page2=="editpass"){
	include 'editpass.php';
}else if($page2=="proseseditpass"){
	include 'proseseditpass.php';

}else if($page2=="tentangkami"){
	include 'part/tentangkami.php';
}else if($page2=="etentangkami"){
	include 'part/etentangkami.php';
	
}else if($page2=="kontakkami"){
	include 'pesan/kontakkami.php';
	
}else if($page2=="register"){
	include 'part/register.php';
}else if($page2=="editprofil"){
	include 'part/editpelanggan.php';
}else if($page2=="editprofilk"){
	include 'admin/karyawan/edit_profil.php';
}else if($page2=="pesan_travel"){
	include 'part/pesan_travel.php';
}else if($page2=="travel"){
	include 'part/travel.php';
}else if($page2=="isi_travel"){
	include 'part/isi_travel.php';
}else if($page2=="data_travel"){
	include 'part/data_travel.php';
}else if($page2=="isi_datatravel"){
	include 'part/isi_datatravel.php';
}else if($page2=="riwayat_travel"){
	include 'part/riwayat_travel.php';
	
	
}else if($page2=="pesan"){
	include 'pesan/pesan.php';
}else if($page2=="isipesan"){
	include 'pesan/isipesan.php';
}else if($page2=="dpesan"){
	include 'pesan/dpesan.php';	
	
}else if($page2=="tartikel"){
	include 'artikel/tartikel.php';
}else if($page2=="artikel"){
	include 'artikel/artikel.php';
}else if($page2=="aartikel"){
	include 'artikel/aartikel.php';
}else if($page2=="isiartikel"){
	include 'artikel/isiartikel.php';
}else if($page2=="dartikel"){
	include 'artikel/dartikel.php';
}else if($page2=="eartikel"){
	include 'artikel/eartikel.php';	
	
}else if($page2=="jadwal"){
	include 'admin/jadwal/jadwal.php';	
}else if($page2=="isi_jadwal"){
	include 'admin/jadwal/isi_jadwal.php';	
}else if($page2=="rute"){
	include 'admin/rute/rute.php';
	
	
}else if($page2=="pesantravel"){
	include 'part/pesantravel.php';
}else if($page2=="batal"){
	include 'part/batal.php';
	

}else{
	echo"halaman belum ada";
}
?>