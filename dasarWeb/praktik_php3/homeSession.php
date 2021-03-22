<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		session_start();

		if($_SESSION['status']=='login'){
			echo "Selamat datang" . $_SESSION['username'];
			?>
			<br> <a href="sessionLogout.php"> Log Out </a>
		<?php
		}else{
			echo "anda belum login. silahkan "?>
			<a href="sessionLoginForm.html"></a> Log In </a>
		<?php
		}
	?>
</body>
</html>