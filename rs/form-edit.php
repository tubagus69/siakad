<?php
include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location: pasien.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE no=$no";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit</title>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="no" value="<?php echo $pasien['no'] ?>" />

        <p>
            <label for="no_rekam_medik">No Rekam Medik : </label>
            <input type="text" name="no_rekam_medik" value ="<?php echo $pasien['no_rekam_medik'] ?>" />
        </p>    
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pasien['nama'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <?php $jk = $pasien['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>> L</label>
            <label><input type="radio" name="jenis_kelamin" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>> P</label>
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat"><?php echo $pasien['alamat'] ?></textarea>
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir : </label>
            <input type="text" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>