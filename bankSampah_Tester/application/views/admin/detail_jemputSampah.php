<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Jemput Sampah
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama :</b>
                        <?= $jemputSampah['nama']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="alamat"><b> Alamat :</b></label>
                            <?= $jemputSampah['alamat']; ?>
                        </p>
                        <p class="card-text">
                            <label for="noTelp"><b> NoTelp :</b></label>
                            <?= $jemputSampah['noTelp']; ?>
                        </p>

                        <p class="card-text">
                            <label for="permintaan"><b> Permintaan :</b></label>
                            <?= $jemputSampah['permintaan']; ?>
                        </p>
                        <a href="<?= base_url("JemputSampah/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>