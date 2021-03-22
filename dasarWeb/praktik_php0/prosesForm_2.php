<?php
	if (isset($_GET['nama']) AND isset($_GET['email'])){
		$nama=$_GET['nama'];
		$email=$_GET['email'];
		$komentar=$_GET['komentar'];
		$isi_form="&nama=$nama&email=$email$komentar=$komentar";
	}
	else{
		("Location:form2.php?error=variabel_belum_diset");
	}
	
	if(empty($nama)) {
		("Location:form2.php?error=nama_kosong".$isi_form);
	}
	
	else if(empty($email)) {
		("Location:form2.php?error=email_kosong".$isi_form);
	}
	
	else{
		echo "Nama: $nama <br> Email: $email <br> $komentar: $komentar";
	}
?>
	