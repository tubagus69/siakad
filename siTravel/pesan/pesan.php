
<link rel="stylesheet" type="text/css" href="css/mix.css">
<?php
echo"<div class='kotak'>
<div class='center3'>
<link rel='stylesheet' type='text/css' href='css/styletampil.css'>
<h4><p align='center'><b>Pesan Masuk</b></p></h4>

<center><br>";
$query=mysql_query("select * from contactus order by kode");
		echo "<table border='1' align='center'>
				<th>Subjek</th>
				<th>Email</th>
				<th>Tanggal</th>
				<th>Aksi</th>";
	while($data=mysql_fetch_array($query))
	{
		echo "<tr>
					<td>$data[subjek]</td>
					<td>$data[email]</td>
					<td>$data[tgl]</td>
					<td><a href='utama.php?page2=isipesan&&kode=$data[kode]'>Lihat Selengkapnya</a> ";
	}
		echo "</tr></table>";
		?></div></div>