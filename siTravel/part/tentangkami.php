
<link rel="stylesheet" type="text/css" href="css/kontakkami.css">
<div id='kotakcontent4'>

<link rel="stylesheet" type="text/css" href="css/mix.css">
<link rel="stylesheet" type="text/css" href="css/formcontact2.css">
<center>
<div class="content4">
	<div class='kotak'>
	<?php 
	
	$query=mysql_query("select * from halaman")or die(mysql_error());
	while($data=mysql_fetch_array($query))
	{
		echo "<h2 class='head'><p align='center'>$data[judulweb] </h2>
		<div class='mostnew2tk'>
			<img src='admin/photo/$data[foto]' width='250px' ></div>
			<div class='mostnewtk'>$data[deskripsi]</div>
			
			";
	}
		echo "</tr></table>";
		?>
	</div>

	</div></div></div>
		