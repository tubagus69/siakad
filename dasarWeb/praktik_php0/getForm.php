<html>
<head>
</head>
<body>
	<?php 
	if(isset ($_GET["username"]) and isset($_GET["email"])){
		echo "Welcome ". $_GET["username"] . "!<br>";
		echo "Your email address is: " . $_GET["email"];
	}
	else{
		echo "Maaf, Anda harus mengakses halaman ini dari form1.html";
	}
	?>
</body>
</html>