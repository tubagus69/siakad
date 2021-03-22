<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail petugas
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama :</b>
                        <?= $petugas['nama']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="email"><b>Email : </b></label>
                            <?= $petugas['email']; ?>
                        </p>
                        <p class="card-text">
                            <label for="tgl_lahir"><b>Tgl lahir : </b></label>
                            <?= $petugas['tgl_lahir']; ?>
                        </p>
                        <p class="card-text">
                            <label for="agama"><b>Agama : </b></label>
                            <?= $petugas['agama']; ?>
                        </p>
                        <p class="card-text">
                            <label for="alamat"><b> Alamat :</b></label>
                            <?= $petugas['alamat']; ?>
                        </p>
                        <p class="card-text">
                            <label for="noTelp"><b> NoTelp :</b></label>
                            <?= $petugas['noTelp']; ?>
                        </p>
                        <a href="<?= base_url("petugas/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>