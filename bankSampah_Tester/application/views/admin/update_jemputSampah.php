<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header">
                    Edit Jemput Sampah
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
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $jemputSampah['nama'] ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $jemputSampah['alamat']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="noTelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="noTelp" name="noTelp" value="<?= $jemputSampah['noTelp']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="permintaan" class="form-label">Permintaan</label>
                            <input type="text" class="form-control" id="permintaan" name="permintaan" value="<?= $jemputSampah['permintaan']; ?>">
                        </div>

                        <button type=" submit" name="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url("JemputSampah/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>