<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    Tambah Jemput Sampah
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
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamatHelp">
                        </div>

                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="noTelp" name="noTelp" aria-describedby="noTelpHelp">
                        </div>

                        <div class="form-floating">
                            <label for="floatingTextarea2">Permintaan</label>
                            <textarea class="form-control" id="permintaan" name="permintaan" style="height: 100px"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?= base_url("JemputSampah/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>