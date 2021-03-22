<?php
require_once "koneksi.php";
$passwordlama =MD5($_POST['passwordlama']);
$passwordbaru =MD5($_POST['passwordbaru']);
$konfirmasipassword =MD5($_POST['konfirmasipassword']);
$username = $_POST['username'];
    
$cekuser = "select * from admin where login_username = '$username' and login_password = '$passwordlama'";
$querycekuser = mysql_query($cekuser);
$count = mysql_num_rows($querycekuser);

if ($count >= 1)
{
$updatepassword ="UPDATE admin set login_password='$passwordbaru' where login_username='$username'";
$updatequery = mysql_query($updatepassword);
if($updatequery)
{
"Password telah diganti menjadi $passwordbaru";
echo"<script> alert ('Passord telah diganti');
		window.location='admin.php?page2=start'
	</script>";
}
}
?>

