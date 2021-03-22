<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa ['nama'];?></h5>
                <p class="card-text">
                    <label for=""><b> Email:</b></label>
                    <?= $mahasiswa ['email']; ?></p>
                    <label for=""><b> Nim:</b></label>
                    <?= $mahasiswa['nim']; ?></p>
                    <label for=""><b> Jurusan:</b></label>
                    <?= $mahasiswa ['jurusan']; ?><p>
                </p>
                <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>