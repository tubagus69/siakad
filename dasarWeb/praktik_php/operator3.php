<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$a = true;
		$b = false;

		echo "nilai a AND b adalah "; var_dump($a and $b);
		echo "<br> nilai a OR b adalah "; var_dump($a or $b);
		echo "<br> nilai a XOR b adalah "; var_dump($a xor $b);
		echo "<br><br> nilai a && b adalah "; var_dump($a && $b);
		echo "<br> nilai a || b adalah "; var_dump($a || $b);
		echo "<br> nilai !a || b adalah "; var_dump(!$a or $b);
		?>
</body>
</html>