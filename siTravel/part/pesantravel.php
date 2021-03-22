<?php
if(isset($_POST['simpan']))
	{
		$id_tanggal=$_POST['id_tanggal'];
		$id_jam=$_POST['id_jam'];
		$jml_pesan = $_POST['jml_pesan'];
		$status_jalan = $_POST['status_jalan'];
		
		$sql = mysql_query("update pemesanan set
								
							id_jam='$id_jam',
								id_tanggal='$id_tanggal',
								jml_pesan='$jml_pesan',
								status_jalan='$status_jalan',
							tgl_pesan=now()
								where id_pemesanan='$_GET[id_pemesanan]'")or die(mysql_error());
		
		$sql2 = mysql_query("insert into detail_pemesanan(id_pemesanan,
								status_pemesanan)
									
								values('$_GET[id_pemesanan]',
								'Menunggu')")or die(mysql_error());
								
		if ($sql && $sql2)
		{
			echo "<script>alert('Data berhasil disimpan');
						window.location='utama.php?page2=travel';</script>";
		}
		else
		{
			echo "<script>alert('Data gagal disimpan');</script>";
		}
	}
$query=mysql_query("select max(id_pemesanan)As akhir from pemesanan")or die (mysql_error());
$row=mysql_fetch_array($query);
$hasil=$row['akhir'];
$next=substr($hasil,3,4)+1;
$next_hasil='PT-'.sprintf('%03s',$next);

$info=mysql_query("select * from halaman");
$hinfo=mysql_fetch_array($info);

$querytravel = mysql_query("select pemesanan.*, jadwal.tujuan 
							from pemesanan, jadwal 
							where pemesanan.id_jadwal = jadwal.id_jadwal 
							and pemesanan.id_pemesanan='$_GET[id_pemesanan]'")or die (mysql_error());
$rtravel=mysql_fetch_array($querytravel);
?>
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>
<div class='kotak'>
<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<h4><b>Pesan Travel</b></h4><br><br>
<div class="content4">
<div class='mostnew3'>
<b>Untuk Pembayaran Transfer ke : </b><br>1. No Rekening <?php echo $hinfo['rek']; ?> <br> 2. No Rekening <?php echo $hinfo['rek2']; ?>

<br><br>Setelah melakukan pembayaran via transfer konfirmasi pembayaran melalui <b>SMS/TELEPON Ke No </b><?php echo $hinfo['telp']; ?>
<br><br>Dapat juga dengan <b>mendatangi Kantor kami yang berlokasi di : </b><br><?php echo $hinfo['lokasi']; ?>

<br><br>Untuk melihat <b>Rute Perjalanan</b> yang akan dilalui, dapat memilih pada menu <b>Cek Rute</b>
</div>
<div class='mostnew3'>
	<table border='0' align='center' >
<form method='POST'>
	<tr>
		<td><b>No Pemesanan</b></td> 
	</tr>
	<tr>
		<td><input type='text' name="id_pemesanan" type="text" value=<?php echo"$rtravel[id_pemesanan]";?> READONLY></td>
	</tr>
	
	<tr>
		<td><b>Destinasi</b></td>	
	</tr>
	<tr>
		<td><textarea cols='25' rows='5' name="pengguna_alamat" readonly><?php echo "$rtravel[tujuan]";?></textarea></td>
	</tr>
	
	<tr>
		<td><b>Tanggal Keberangkatan</b></td>	
	</tr>
	<tr>
		<td><select name='id_tanggal' class="form-control">
											<option >Pilih Tanggal</option>
											<?php
											include '../koneksi.php';										
											$tanggal_sekarang = date("Ymd");
											$query=mysql_query("select tanggal_keberangkatan.* from tanggal_keberangkatan, pemesanan 
											where pemesanan.id_pemesanan='$_GET[id_pemesanan]' 
											and pemesanan.id_jadwal=tanggal_keberangkatan.id_jadwal");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_tanggal]'>
														$r[tanggal]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select></td>
	</tr>
	
	<tr>
		<td><b>Jam Keberangkatan</b></td>	
	</tr>
	<tr>
		<td><select name='id_jam' class="form-control">
											<option value='0'>Pilih Jam</option>
											<?php
											include '../koneksi.php';		
											$query=mysql_query("select jam_keberangkatan.* from jam_keberangkatan, pemesanan where pemesanan.id_pemesanan='$_GET[id_pemesanan]' 
											and pemesanan.id_jadwal=jam_keberangkatan.id_jadwal");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_jam]'>
														$r[jam]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select></td>
	</tr>
	
	
	
	
	<tr>
		<td><b>Jumlah Orang</b></td>	
	</tr>
	<tr>
		<td><input type='text' name='jml_pesan' required></td>
	</tr>
	
	<tr>
		<td><b>Status Jalan</b></td>	
	</tr>
	<tr>
		<td><input type='radio' name='status_jalan' value='1'>Satu Kali Jalan
			<input type='radio' name='status_jalan' value='2'>Pulang Pergi</td>
	</tr>

	<tr>
		<td colspan='2' align='center'><input type='submit' name='simpan' value='Simpan'><input type='reset' name='batal' value='Batal'></td>
	</tr>
	</form>
	</table>
	</div><br><br><br>
	</div></div></div>
	
		