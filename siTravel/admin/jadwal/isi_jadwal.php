
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
<?php 
echo"<p align='left'>";

$id_jadwal= $_GET['id_jadwal'];
$exe = mysql_query ("select jadwal.*, 
					kendaraan.*,
					pengemudi.*,
					tanggal_keberangkatan.tanggal,
					jam_keberangkatan.jam
					from jadwal, kendaraan, pengemudi, tanggal_keberangkatan, jam_keberangkatan
					where jadwal.id_kendaraan=kendaraan.id_kendaraan
					and jadwal.id_pengemudi=pengemudi.id_pengemudi
					and jadwal.id_jadwal=tanggal_keberangkatan.id_jadwal
					and jadwal.id_jadwal=jam_keberangkatan.id_jadwal
					and jadwal.id_jadwal='$_GET[id_jadwal]'")or die(mysql_error());

while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";?>
<p align='center'><h4><b>Data Jadwal Keberangkatan</b></h4></p>
<?php
echo"
<table border='0'>
<tr><td align='center'>";
echo "
	<tr>
		<td><br><b>Jadwal</b></td> 
	</tr>
	<tr>
		<td><br>ID Jadwal</td> <td width='6%' align='center'><br> : </td> <td><br> $data[id_jadwal]</td>
	</tr>
	
	<tr>
		<td><br>Tujuan </td> <td width='6%' align='center'><br> : </td> <td><br>$data[tujuan]</td>
	</tr>
	
	<tr>
		<td><br>Biaya </td> <td width='6%' align='center'><br> : </td> <td><br>$data[biaya]</td>
	</tr>
	
	<tr>
		<td><br>Tanggal</td> <td width='6%' align='center'><br> : </td> <td><br>$data[tanggal]</td>
	</tr>
	
	<tr>
		<td><br>Jam</td> <td width='6%' align='center'><br> : </td> <td><br>$data[jam]</td>
	</tr>
	
	<tr>
		<td><br>Jumlah Kursi</td> <td width='6%' align='center'><br> : </td> <td><br>$data[jumlah_kursi]</td>
	</tr>
	
	<tr>
		<td><br><br><b>Kendaraan</b></td> 
	</tr>
	
	<tr>
		<td colspan='3' align='center'><br><img src='admin/photo/$data[foto_kendaraan]'  width='170' align='center'></td>
	</tr>
	
	<tr>
		<td><br>Merk</td> <td width='6%' align='center'><br> : </td> <td><br> $data[merk]</td>
	</tr>
	
	<tr>
		<td><br>No Polisi </td> <td width='6%' align='center'><br> : </td> <td><br>$data[no_polisi]</td>
	</tr>
	
	<tr>
		<td><br>No Rangka </td> <td width='6%' align='center'><br> : </td> <td><br>$data[no_rangka]</td>
	</tr>
	
	<tr>
		<td><br>No Mesin</td> <td width='6%' align='center'><br> : </td> <td><br>$data[no_mesin]</td>
	</tr>
	
	<tr>
		<td><br>Warna</td> <td width='6%' align='center'><br> : </td> <td><br>$data[warna]</td>
	</tr>
	
	<tr>
		<td><br>Transmisi</td> <td width='6%' align='center'><br> : </td> <td><br>$data[transmisi]</td>
	</tr>
	
	<tr>
		<td><br><br><b>Pengemudi</b></td> 
	</tr>
	
	<tr>
		<td colspan='3' align='center'><br><img src='admin/photo/$data[foto_pengemudi]'  width='170' align='center'></td>
	</tr>
	
	<tr>
		<td><br>Nama Pengemudi</td> <td width='6%' align='center'><br> : </td> <td><br> $data[nama_pengemudi]</td>
	</tr>
	
	<tr>
		<td><br>Alamat </td> <td width='6%' align='center'><br> : </td> <td><br>$data[alamat]</td>
	</tr>
	
	<tr>
		<td><br>No Telepon </td> <td width='6%' align='center'><br> : </td> <td><br>$data[no_telp]</td>
	</tr>
	
	
	
	
	
"; } 
?>
	
	</table><br><br><br>
</div></div></div>