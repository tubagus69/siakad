<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";

	$connect = mysqli_connect($namaHost, $username, $password);

	if($connect){
		echo "Koneksi dengan MySql berhasil";
	}
	else{
		echo "Koneksi dengan MySql gagal" . mysqli_connect_error();
	}
	?>