<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$query = "DELETE FROM mahasiswa WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
?>
	<a href="homeCRUD.php">Lihat data di Tabel</a>
<?php
	}else{
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
?>