<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Nasabah
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama :</b>
                        <?= $nasabah['name']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="email"><b>Email : </b></label>
                            <?= $nasabah['email']; ?>
                        </p>
                        <p class="card-text">
                            <label for="address"><b> Alamat :</b></label>
                            <?= $nasabah['address']; ?>
                        </p>
                        <p class="card-text">
                            <label for="noTelp"><b> NoTelp :</b></label>
                            <?= $nasabah['noTelp']; ?>
                        </p>
                        <a href="<?= base_url("Nasabah/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>