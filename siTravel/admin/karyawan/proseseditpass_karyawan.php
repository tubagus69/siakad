<?php

$passwordlama =MD5($_POST['passwordlama']);
$passwordbaru =MD5($_POST['passwordbaru']);
$konfirmasipassword =MD5($_POST['konfirmasipassword']);
$username = $_POST['username'];
    
$cekuser = "select admin.login_username, 
					admin.login_password,
					karyawan.username,
					karyawan.password
			from admin,karyawan
			where admin.login_username='$username'
			and admin.login_password='$passwordlama'
			and karyawan.password='$passwordlama'
			and karyawan.password='$passwordlama'";
$querycekuser = mysql_query($cekuser)or die(mysql_error());
$count = mysql_num_rows($querycekuser)or die(mysql_error());

if ($count >= 1)
{
$updatepassword ="UPDATE admin, karyawan 
					set admin.login_password='$passwordbaru',
						karyawan.password='$passwordbaru'
					where admin.login_username='$username'
					and karyawan.username='$username'" ;
$updatequery = mysql_query($updatepassword) or die(mysql_error());
if($updatequery)
{
echo"<script> alert ('Passord berhasil');
		window.location='utama.php?page2=home'
	</script>";
}
else
{
echo"<script> alert ('Passord berhasil');
		window.location='utama.php?page2=edipass'
	</script>";
}
}


?>

