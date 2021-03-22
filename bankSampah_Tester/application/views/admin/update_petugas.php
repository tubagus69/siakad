<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header">
                    Edit petugas
                </div>

                <div class="card-body">

                    <?php if (validation_errors()) : ?>
                        <div class="aler alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $petugas['nama'] ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $petugas['email']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="tgl_lahir" class="form-label">Tgl lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $petugas['tgl_lahir']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <?php foreach ($agama as $key) : ?>
                                    <option value="<?php echo $key ?>" selected><?= $key ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class=" mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $petugas['alamat']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="noTelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="noTelp" name="noTelp" value="<?= $petugas['noTelp']; ?>">
                        </div>

                        <button type=" submit" name="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url("petugas/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>