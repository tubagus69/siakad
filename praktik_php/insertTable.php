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

	$sql = "INSERT INTO mahasiswa(id, nama, alamat)
			VALUES ('0001', 'George', 'malang'),('0002', 'Charlotte','malang'),('0003', 'Louis', 'surabaya')";

	if(mysqli_query($connect, $sql)){
		echo "Record berhasil ditambahkan";
	}
	else{
		echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
	?>