<?php
		if($_SESSION['login_level']=="pelanggan") {
?>
<?php 
	$inf=mysql_query("select * from halaman");
	$dinf=mysql_fetch_array($inf);
?>
<div id="atas">
					<div id="logo">
						<div class='logo2'><img src='img/logo5.png' width='70px' height='60px'></div><div class='logo3'><?php echo $dinfohal['judulweb'];?></div>
					</div>
		<div id="menu">
						<ul>
							<li><a href="utama.php?page2=home">BERANDA<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=tentangkami">TENTANG KAMI<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=kontakkami">KONTAK KAMI<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=jadwal">JADWAL<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=rute">CEK RUTE<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=pesan_travel">PESAN <span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=travel">RIWAYAT<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=editprofil">PENGATURAN<span class="menuHighlight"></span></a></li>
							<li><a href="logout.php">KELUAR<span class="menuHighlight"></span></a></li>
							
						</ul>
		</div>
		</div>
<?php }elseif($_SESSION['login_level']=="karyawan") {?>
<div id="atas">
					<div id="logo">
						<div class='logo2'><img src='img/logo5.png' width='70px' height='60px'></div><div class='logo3'><?php echo $dinfohal['judulweb'];?></div>
					</div>
		<div id="menu">
						<ul>
							<li><a href="utama.php?page2=home">BERANDA<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=tentangkami">TENTANG KAMI<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=kontakkami">KONTAK KAMI<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=data_travel">PESANAN<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=riwayat_travel">RIWAYAT<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=artikel">BERITA<span class="menuHighlight"></span></a></li>
							<li><a href="utama.php?page2=editprofilk">PENGATURAN<span class="menuHighlight"></span></a></li>
							<li><a href="logout.php">KELUAR<span class="menuHighlight"></span></a></li>
							
						</ul>
		</div>
		</div>
<?php } ?>