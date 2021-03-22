<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
			{
		
		$id_pemesanan = $_POST['id_pemesanan'];
		$id_jadwal = $_POST['id_jadwal'];
		
		$sql = mysql_query("insert into pemesanan(id_pemesanan,
													id_pengguna,
													
													id_jadwal
													)
									
								values('$id_pemesanan',
								'$_SESSION[login_username]',
								
								'$id_jadwal'
								)")or die(mysql_error());
								
		
		if ($sql)
		{
			echo "<script>alert('Data berhasil disimpan');
						window.location='utama.php?page2=pesantravel&id_pemesanan=$id_pemesanan';</script>";
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
		<td><input type='text' name="id_pemesanan" type="text" value=<?php echo" $next_hasil";?> READONLY></td>
	</tr>
	
	<tr>
		<td><b>Destinasi</b></td>	
	</tr>
	<tr>
		<td><select name='id_jadwal' class="form-control" onchange="this.form.submit();">
											<option value='0'>Pilih Tujuan Destinasi</option>
											<?php
											include '../koneksi.php';
											$query=mysql_query("select * from jadwal");
											while($r=mysql_fetch_array($query))
											{
												echo"<option value='$r[id_jadwal]'>
														$r[tujuan]
													</option>";
													
											}			
												echo"</select>";	
											?>
											</select></td>
	</tr>
	
	
	</form>
	</table>
	</div><br><br><br>
	</div></div></div>
	
		