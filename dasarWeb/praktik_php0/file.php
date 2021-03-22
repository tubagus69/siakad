<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$myFile = "testFile.txt";
		$fh = fopen($myFile, 'r');
		$theData = fread($fh, 5);
		fclose($fh);
		echo $theData; 
	?>
</body>
</html>