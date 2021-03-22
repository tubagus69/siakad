
<html>
<head>
	<title>Print Document</title>
   <?php 
echo"<p align='left'><link rel='stylesheet' type='text/css' href='../assets/css/styletampil2.css'>";
include '../koneksi.php';?>
<center><p align='center'><h3>Daftar karyawan</h3></p>
<?php $query=mysql_query("select * from karyawan");
		echo "<table border='1' align='center'>
				<th>Kode</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Email</th>
				<th>Shift</th>
				<th>Foto</th>
				<th>Status</th>
				<th>Username</th>
				";
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>
					<td>$data[id_karyawan]</td>
					<td>$data[nama_karyawan]</td>
					<td>$data[alamat]</td>
					<td>$data[no_telp]</td>
					<td>$data[email]</td>
					<td>$data[shift]</td>
					<td><img src='../../photo/$data[foto_karyawan]' width='50px' height='50px'></td>
					<td>$data[status_karyawan]</td>
					<td>$data[username]</td>
					";
	}
		echo "</tr></table>";
?>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>