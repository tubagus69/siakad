<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $norekam = $_POST['no_rekam_medik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tanggal_lahir'];

    // buat query
    $sql = "INSERT INTO pasien (no_rekam_medik,nama, jenis_kelamin ,alamat, tanggal_lahir) VALUE ('$norekam','$nama',  '$jk','$alamat','$tgl')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: pasien.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.html?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>