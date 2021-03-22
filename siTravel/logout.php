<?php
session_start();
unset($_SESSION['login_username']);
echo"<script> alert ('Anda Telah Berhasil Sign Out');
		window.location='index.php'
	</script>";
?>