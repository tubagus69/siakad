<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>RS Nanda</title>
</head>

<body>
    <header>
        <h3>Daftar Pasien</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Rekam Medik</th>
            <th>Nama </th>
            <th>L/P</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pasien";
        $query = mysqli_query($db, $sql);

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pasien['no']."</td>";
            echo "<td>".$pasien['no_rekam_medik']."</td>";
            echo "<td>".$pasien['nama']."</td>";
            echo "<td>".$pasien['l/p']."</td>";
            echo "<td>".$pasien['alamat']."</td>";
            echo "<td>".$pasien['tanggal_lahir']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?no=".$pasien['no']."'>Edit</a> | ";
            echo "<a href='hapus.php?no=".$pasien['no']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>