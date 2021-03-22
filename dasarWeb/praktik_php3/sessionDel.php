<?php
	session_start();
?>

<html>
	<body>
		<?php
		session_unset();
		session_destroy();

		echo "All session variables are now removed, and the session is destroyed";
		?>

	</body>
</html>