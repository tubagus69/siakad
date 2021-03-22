<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "praktikumdb";
	
	$connect = mysqli_connect($namaHost, $username, $password, $database);
	
	if($connect) {
		echo "Koneksi dengan MySQL berhasil <br>";
		
		}
		else{
			echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
		}
		
		$sql = "INSERT INTO user(id, username, password)
				VALUES ('1' , 'admin' , '123')";
				
		if (mysqli_query($connect, $sql)) {
			echo "Record berhasil ditambahkan";
		}
		else{
			echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
		}
		
		mysqli_close($connect);
		
?>





		
