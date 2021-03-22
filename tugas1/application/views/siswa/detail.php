<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Siswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $siswa ['nama'];?></h5>
                <p class="card-text">
                    <label for=""><b> Alamat:</b></label>
                    <?= $siswa ['alamat']; ?></p>
                    <label for=""><b> Nim:</b></label>
                    <?= $siswa['nim']; ?></p>
                </p>
                <a href="<?= base_url();?>siswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>