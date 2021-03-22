<link rel='stylesheet' type='text/css' href='assets/css/form.css'>
	<div id='wrappermostbuku2'>
	<div class='box'>
	<div class='tutupbox'>Ubah Password</div>
<table border="0" align="center">

<form action="utama.php?page2=proseseditpass_karyawan" method="POST" />
<tr>
	<td><pre>
Username 		 :<input type="text" name="username" id="username" value=<?php echo"$_SESSION[login_username]";?> readonly>
Password <strong>Lama</strong> 		 :<input type="password" name="passwordlama" id="passwordlama" />
Password <strong>Baru</strong> 		 :<input type="password" name="passwordbaru" id="passwordbaru" />
Konfirmasi <strong>Password Baru</strong> :<input type="password" name="konfirmasipassword" id="konfirmasipassword" />
</pre></td></tr>
<tr>
	<td align="center"><input type="submit" name="change" value="Ganti"> 			<input type="reset" name="batal" value="Batal">
	</td>
</tr>
</form>
</table></div></div>
