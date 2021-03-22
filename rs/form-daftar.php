<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="no_rekam_medik">No. Rekam Medik : </label>
            <input type="text" name="no_rekam_medik" /> 
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">L</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">P</label>
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat"></textarea>
        </p>    
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="date" name="tanggal_lahir" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>