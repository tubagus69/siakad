
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>

<?php 
echo"<p align='left'>";

$id_pemesanan= $_GET['id_pemesanan'];
$exe = mysql_query ("select jadwal.*, 
					kendaraan.*,
					pengemudi.*,
					pemesanan.*,
					pengguna.*,
					tanggal_keberangkatan.tanggal,
					rute.*,
					jam_keberangkatan.jam,
					detail_pemesanan.status_pemesanan
					from jadwal, kendaraan, pengemudi, pemesanan, detail_pemesanan, pengguna, jam_keberangkatan, tanggal_keberangkatan, rute
					where jadwal.id_kendaraan=kendaraan.id_kendaraan
					and jadwal.id_pengemudi=pengemudi.id_pengemudi
					and pemesanan.id_pemesanan=detail_pemesanan.id_pemesanan
					and pemesanan.id_jadwal=jadwal.id_jadwal
					and pemesanan.id_tanggal=tanggal_keberangkatan.id_tanggal
					and pemesanan.id_jam=jam_keberangkatan.id_jam
					and pemesanan.id_jadwal=rute.id_jadwal
					and pemesanan.id_pengguna=pengguna.pengguna_username
					and pemesanan.id_pemesanan='$_GET[id_pemesanan]'")or die(mysql_error());

while($data = mysql_fetch_array($exe))
{
	$biaya = $data['biaya'];
	$jml_pesan = $data['jml_pesan'];
	$jalan = $data['status_jalan'];
	$total =  $biaya * $jml_pesan * $jalan;
	
	if ($jalan == 1)
	{
		$status_jalan = 'Satu Kali Jalan';
	}
	elseif ($jalan == 2)
	{
		$status_jalan = 'Pulang Pergi';
	}
	else
	{
		$status_jalan = 'Salah';
	}
echo"<center><p align='right'>";?>
<p align='center'><h4><b>Data Pemesanan</b></h4></p>
<?php
echo"
<table border='0'>
<tr><td align='center'>";
echo "


	<tr>
		<td><br><b>Pemesanan</b></td> 
	</tr>
	<tr>
		<td><br>ID Pemesanan</td> <td width='6%' align='center'><br> : </td> <td><br> $data[id_pemesanan]</td>
	</tr>
	
	<tr>
		<td><br>ID Jadwal</td> <td width='6%' align='center'><br> : </td> <td><br> $data[id_jadwal]</td>
	</tr>
	
	<tr>
		<td><br>Tujuan </td> <td width='6%' align='center'><br> : </td> <td><br>$data[tujuan]</td>
	</tr>
	
	<tr>
		<td><br>Jumlah Pesan </td> <td width='6%' align='center'><br> : </td> <td><br>$data[jml_pesan]</td>
	</tr>
	
	<tr>
		<td><br>Biaya </td> <td width='6%' align='center'><br> : </td> <td><br>$data[biaya]</td>
	</tr>
	
	<tr>
		<td><br>Status Jalan</td> <td width='6%' align='center'><br> : </td> <td><br>$status_jalan</td>
	</tr>
	
	<tr>
		<td><br>Total Bayar </td> <td width='6%' align='center'><br> : </td> <td><br>$total</td>
	</tr>
	
	<tr>
		<td><br>Tanggal Pesan</td> <td width='6%' align='center'><br> : </td> <td><br>$data[tgl_pesan]</td>
	</tr>
	
	<tr>
		<td><br>Tanggal Keberangkatan</td> <td width='6%' align='center'><br> : </td> <td><br>$data[tanggal]</td>
	</tr>
	
	<tr>
		<td><br>Jam</td> <td width='6%' align='center'><br> : </td> <td><br>$data[jam]</td>
	</tr>
	
	<tr>
		<td><br>Deskripsi Rute</td> <td width='6%' align='center'><br> : </td> <td><br>$data[deskripsi_rute]</td>
	</tr>
	
	<tr>
		<td><br>Alamat Jemput</td> <td width='6%' align='center'><br> : </td> <td><br>$data[alamat_jemput]</td>
	</tr>
	
	
	<tr>
		<td><br><br><b>Identitas Pemesan</b></td> 
	</tr>
	<tr>
		<td><br>Nama Pemesan</td> <td width='6%' align='center'><br> : </td> <td><br> $data[pengguna_nama]</td>
	</tr>
	
	<tr>
		<td><br>Email</td> <td width='6%' align='center'><br> : </td> <td><br> $data[pengguna_email]</td>
	</tr>
	
	<tr>
		<td><br>No Telepon</td> <td width='6%' align='center'><br> : </td> <td><br> $data[pengguna_hp]</td>
	</tr>
	
	<tr>
		<td><br>Alamat</td> <td width='6%' align='center'><br> : </td> <td><br> $data[pengguna_alamat], $data[pengguna_kecamatan], Kota/Kab $data[pengguna_kota], Provinsi $data[pengguna_provinsi]</td>
	</tr>
	
	<tr>
		<td><br>No Rekening</td> <td width='6%' align='center'><br> : </td> <td><br> $data[pengguna_rek] atas nama $data[pengguna_nm_rek]</td>
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
";?>


<?php if($data['status_pemesanan']=='Menunggu') {
		?>
	
	<form method="post">
	<tr>
		<td colspan='3' align='center'><br><br><input type="submit"  name="simpan" value="Konfirmasi Pesanan"></td>
	</tr>
	<?php }?>
	</form>
<?php 
 } 
?>
	
	</table><br><br><br>
</div></div></div>

<?php 
if (isset($_POST['simpan']))
	{
				$masuk = mysql_query("update detail_pemesanan set 
										status_pemesanan='Terkonfirmasi',
										total='$total'
									
										where id_pemesanan='$_GET[id_pemesanan]'");
									 
					
					if($masuk){ echo " <script> alert ('file berhasil disimpan'); 
										window.location ='utama.php?page2=data_travel'</script>"; 
							  }
					else{ echo "<script> alert ('gagal simpan'); 
								window.location='?open=Home'</script>"; 
						}  
	}
	?>