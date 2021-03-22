<?php
$page2=$_GET['page2'];
if($page2=="start"){
	include 'start.php';
}else if($page2=="menu"){
	include 'menu.php';
}else if($page2=="home"){
	include 'home.php';
}else if($page2=="editpass"){
	include 'editpass.php';
}else if($page2=="proseseditpass"){
	include 'proseseditpass.php';
}else if($page2=="edithalaman"){
	include 'edithalaman.php';
}else if($page2=="pelanggan"){
	include 'pelanggan.php';
}else if($page2=="pemesanan"){
	include 'pemesanan.php';

}else if($page2=="pemesanan_periode"){
	include 'pemesanan_periode.php';
	

}else if($page2=="tambah_pengemudi"){
	include 'pengemudi/tambah_pengemudi.php';
}else if($page2=="simpan_pengemudi"){
	include 'pengemudi/simpan_pengemudi.php';
}else if($page2=="tampil_pengemudi"){
	include 'pengemudi/tampil_pengemudi.php';
}else if($page2=="isi_pengemudi"){
	include 'pengemudi/isi_pengemudi.php';
}else if($page2=="edit_pengemudi"){
	include 'pengemudi/edit_pengemudi.php';
}else if($page2=="delete_pengemudi"){
	include 'pengemudi/delete_pengemudi.php';
	

}else if($page2=="tambah_kendaraan"){
	include 'kendaraan/tambah_kendaraan.php';
}else if($page2=="simpan_kendaraan"){
	include 'kendaraan/simpan_kendaraan.php';
}else if($page2=="tampil_kendaraan"){
	include 'kendaraan/tampil_kendaraan.php';
}else if($page2=="isi_kendaraan"){
	include 'kendaraan/isi_kendaraan.php';
}else if($page2=="edit_kendaraan"){
	include 'kendaraan/edit_kendaraan.php';
}else if($page2=="delete_kendaraan"){
	include 'kendaraan/delete_kendaraan.php';
	
	
}else if($page2=="tambah_jadwal"){
	include 'jadwal/tambah_jadwal.php';
}else if($page2=="tampil_jadwal"){
	include 'jadwal/tampil_jadwal.php';
}else if($page2=="edit_jadwal"){
	include 'jadwal/edit_jadwal.php';
}else if($page2=="delete_jadwal"){
	include 'jadwal/delete_jadwal.php';
}else if($page2=="tampil_tujuan"){
	include 'jadwal/tampil_tujuan.php';
	
	
}else if($page2=="tambah_tanggal"){
	include 'tanggal/tambah_tanggal.php';
}else if($page2=="simpan_tanggal"){
	include 'tanggal/simpan_tanggal.php';
}else if($page2=="tampil_tanggal"){
	include 'tanggal/tampil_tanggal.php';
}else if($page2=="edit_tanggal"){
	include 'tanggal/edit_tanggal.php';
}else if($page2=="delete_tanggal"){
	include 'tanggal/delete_tanggal.php';
	
	
}else if($page2=="tambah_jam"){
	include 'jam/tambah_jam.php';
}else if($page2=="simpan_jam"){
	include 'jam/simpan_jam.php';
}else if($page2=="tampil_jam"){
	include 'jam/tampil_jam.php';
}else if($page2=="edit_jam"){
	include 'jam/edit_jam.php';
}else if($page2=="delete_jam"){
	include 'jam/delete_jam.php';
	
}else if($page2=="tambah_rute"){
	include 'rute/tambah_rute.php';
}else if($page2=="tampil_rute"){
	include 'rute/tampil_rute.php';
}else if($page2=="edit_rute"){
	include 'rute/edit_rute.php';
}else if($page2=="delete_rute"){
	include 'rute/delete_rute.php';

	
}else if($page2=="tambah_shift"){
	include 'shift/tambah_shift.php';
}else if($page2=="simpan_shift"){
	include 'shift/simpan_shift.php';	
}else if($page2=="tampil_shift"){
	include 'shift/tampil_shift.php';
}else if($page2=="edit_shift"){
	include 'shift/edit_shift.php';
}else if($page2=="delete_shift"){
	include 'shift/delete_shift.php';
	

}else if($page2=="tambah_karyawan"){
	include 'karyawan/tambah_karyawan.php';
}else if($page2=="simpan_karyawan"){
	include 'karyawan/simpan_karyawan.php';
}else if($page2=="tampil_karyawan"){
	include 'karyawan/tampil_karyawan.php';
}else if($page2=="tampilcetak_karyawan"){
	include 'karyawan/tampilcetak_karyawan.php';
}else if($page2=="edit_karyawan"){
	include 'karyawan/edit_karyawan.php';
}else if($page2=="isi_karyawan"){
	include 'karyawan/isi_karyawan.php';
}else if($page2=="isicetak_karyawan"){
	include 'karyawan/isicetak_karyawan.php';
}else if($page2=="delete_karyawan"){
	include 'karyawan/delete_karyawan.php';	
}else if($page2=="profil_karyawan"){
	include 'karyawan/profil_karyawan.php';
}else if($page2=="edit_profil"){
	include 'karyawan/edit_profil.php';
}else if($page2=="editpass_karyawan"){
	include 'karyawan/editpass_karyawan.php';
}else if($page2=="proseseditpass_karyawan"){
	include 'karyawan/proseseditpass_karyawan.php';	
}else if($page2=="akun"){
	include 'karyawan/akun.php';
	

}else if($page2=="simpan_contactusp"){
	include 'simpan_contactusp.php';
}else if($page2=="pesan"){
	include 'lihat_pesan.php';
}else if($page2=="isi_pesan"){
	include 'isi_pesan.php';
}else if($page2=="delete_pesan"){
	include 'delete_pesan.php';	
}else if($page2=="profil_sekolah2"){
	include 'profil_sekolah2.php';
}else if($page2=="edit_profil_sekolah"){
	include 'edit_profil_sekolah.php';
	
}else{
	echo"halaman belum ada";
}
?>