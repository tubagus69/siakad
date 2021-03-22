<?php 
session_start();

include 'koneksi.php';

//script yang tidak diberi anti sql injection
//$username = $_POST['username'];
//$password = $_POST['password'];

//script yang sudah diberi anti sql injection
$username =
    mysqli_real_escape_string($koneksi, $_POST['username']);
$password =
    mysqli_real_escape_string($koneksi, $_POST['password']);

$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index_admin.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>