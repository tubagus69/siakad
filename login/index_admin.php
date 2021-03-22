<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>!</h4>

	<br/>
	<br/>

	<a href="index.php">LOGOUT</a>


</body>
</html>