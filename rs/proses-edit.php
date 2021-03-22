<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $no = $_POST['no'];
    $norekam =$_POST['no_rekam_medik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tanggal_lahir'];

    // buat query update
    $sql = "UPDATE pasien SET no_rekam_medik='$norekam', nama='$nama', jenis_kelamin='$jk', alamat='$alamat', tanggal_lahir='$tgl' WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: pasien.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>