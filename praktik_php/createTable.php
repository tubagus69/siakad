<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";

	$connect = mysqli_connect($namaHost, $username, $password, $database);

	if($connect){
		echo "Koneksi dengan MySQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
	}

	$sql = "CREATE TABLE mahasiswa(
			id INT PRIMARY KEY,
			nama VARCHAR(30) NOT NULL,
			alamat VARCHAR(50) NOT NULL)";

	if (mysqli_query($connect, $sql)){
		echo "Tabel mahasiswa berhasil dibuat";
	}
	else{
		echo "Tabel mahasiswa gagal dibuat <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
	?>