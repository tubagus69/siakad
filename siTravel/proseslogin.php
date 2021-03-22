<?php
	include ("config/koneksi.php");
	
	$login_username=$_POST['login_username'];
	$login_password=MD5($_POST['login_password']);
	
	$login=mysql_query ("select * from admin
						 where login_username='$login_username' and login_password='$login_password'
						 and status_admin='Y'");
						 
	$jumlah=mysql_num_rows($login);
	$r=mysql_fetch_array($login);

	if($jumlah > 0)
	{
		session_start();
		$_SESSION['login_username']=$r['login_username'];
		$_SESSION['login_password']=$r['login_password'];
		$_SESSION['login_level']=$r['login_level'];
		$_SESSION['foto']=$r['foto'];
		$_SESSION['namalengkap']=$r['namalengkap'];
	
	if($r['login_level']=="admin")
		{
		echo"<script> alert ('Login Berhasil');
		window.location='admin/admin.php?page2=home'
		</script>";	
		}
		
	elseif($r['login_level']=="karyawan")
		{
		echo"<script> alert ('Login Berhasil');
		window.location='utama.php?page2=home'
		</script>";	
		}
	elseif($r['login_level']=="pelanggan")
		{
		echo"<script> alert ('Login Berhasil');
		window.location='utama.php?page2=home'
		</script>";	
		}
	else
		{
		echo"<script> alert ('Login Berhasil');
		window.location='login.php'
		</script>";	
		}
		
	}
	
	else
	{
		echo"<script> alert ('Login Gagal');
		window.location='login.php'
		</script>";
	}
	
?>