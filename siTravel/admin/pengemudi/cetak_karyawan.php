
<html>
<head>
	<title>Print Document</title>
   <?php 
echo"<p align='left'>";
include '../koneksi.php';
$id_karyawan = $_GET['id_karyawan'];
$exe = mysql_query ("select * from karyawan where id_karyawan='$_GET[id_karyawan]'");
while($data = mysql_fetch_array($exe)){
echo"<center><p align='right'>";
echo"<p align='center'><h3><b>Detail Data karyawan</b></h3><br>";
echo "<table><tr><td width='30%' align='center'>
<img src='../../photo/$data[foto_karyawan]' width='200px' align='center'></td></tr>";
echo"<tr><td width='70%' align='left'><br><br>Kode karyawan : ";echo $data['id_karyawan'];
echo"<br><br>Nama karyawan : ";echo $data['nama_karyawan'];
echo"<br><br>Alamat karyawan : ";echo $data['alamat'];
echo"<br><br>No Telp karyawan : ";echo $data['no_telp'];
echo"<p align='left'>Email karyawan : ";echo $data['email'];echo"<br>";
echo"<p align='left'>Jadwal Shift : ";echo $data['shift'];echo"<br>";
echo"<br><br>Status karyawan : ";echo $data['status_karyawan'];
echo"<br><br>Username : ";echo $data['username'];
}
echo"</td></tr></table>";
?>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>