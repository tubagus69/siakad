<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$alamat=$_GET['alamat'];

	$sql="INSERT INTO mahasiswa(id, nama, alamat)
		  VALUE('$id','$nama','$alamat')";

    if(mysqli_query($connect, $sql)){
		  	echo "Record berhasil ditambahkan";
	}
	else{
		echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
?>