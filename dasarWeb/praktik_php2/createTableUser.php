<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";
	
	$connect = mysqli_connect($namaHost, $username, $password , $database);
	
	if($connect) {
		echo "Koneksi dengan MySQL berhasil <br>";
		
		}
		else{
			echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
		}
		
		$sql = "CREATE TABLE user(
				id INT PRIMARY KEY,
				username VARCHAR(50) NOT NULL,
				password VARCHAR(50)NOT NULL)";
				
		if (mysqli_query($connect, $sql)) {
			echo "Tabel user berhasil dibuat";
		}
		else{
			echo "Tabel user gagal dibuat <br>" . mysqli_connect($connect);
		}
		
		mysqli_close($connect);	
?>


		
		
