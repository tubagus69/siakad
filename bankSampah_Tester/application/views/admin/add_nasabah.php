<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    Tambah Nasabah
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="aler alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp">
                        </div>

                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="noTelp" name="noTelp" aria-describedby="noTelpHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?= base_url("Nasabah/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>