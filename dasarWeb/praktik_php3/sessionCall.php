<?php
	session_start();
?>

<html>
	<body>
		<?php
		echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
		?>

	</body>
	</html>