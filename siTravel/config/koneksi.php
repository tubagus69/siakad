<?php
	$server ="localhost";
	$user ="root";
	$password ="";
	$database ="si_travel";
	mysql_connect ($server,$user,$password) or die ("koneksi gagal");
	mysql_select_db ($database) or die ("database gagal");
?>