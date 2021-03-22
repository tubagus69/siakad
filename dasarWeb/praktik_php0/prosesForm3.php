<?php
	if(isset($_GET['nama']) AND isset($_GET['email'])){
		$nama=$_GET['nama'];
		$email=$_GET['email'];
		$komentar=$_GET['komentar'];
		$isi_form="$nama=$nama&email=$email$komentar=$komentar";
	}
	else{
		header("Location:form3.php?error=variabel_belum_diset");
	}

	if(empty($nama)){
		header("Location:form3.php?error=nama_kosong".$isi_form);
	}
	else if(!preg_match("/^[a-zA-Z]*$/",$nama)){
		header("Location:form3.php?error=nama_invalid".$isi_form);
	}
	else if(empty($email)){
		header("Location:form3.php?error=email_kosong".$isi_form);
	}
	else
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location:form3.php?error=email_invalid".$isi_form);
		}else{
			echo "Nama: $nama <br> Email: $email <br> Komentar: $komentar";
		}
?>