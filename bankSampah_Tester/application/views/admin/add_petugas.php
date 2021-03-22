<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header">
                    Tambah Petugas
                </div>

                <div class="card-body">

                    <?php if (validation_errors()) : ?>
                        <div class="aler alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tgl lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" aria-describedby="tgl_lahirHelp">
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <?php foreach ($agama as $key) : ?>
                                    <option value="<?= $key ?>" selected><?= $key ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamatHelp">
                        </div>

                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="noTelp" name="noTelp" aria-describedby="noTelpHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?= base_url("petugas/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>