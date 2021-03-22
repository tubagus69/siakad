<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Setoran
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama :</b>
                        <?= $setor['nama']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="jenis_sampah"><b>Jenis Sampah : </b></label>
                            <?= $setor['jenis_sampah']; ?>
                        </p>

                        <p class="card-text">
                            <label for="kategori"><b> Kategori :</b></label>
                            <?= $setor['kategori']; ?>
                        </p>

                        <p class="card-text">
                            <label for="harga_per_kg"><b> Harga /kg :</b></label>
                            <?= $setor['harga_per_kg']; ?>
                        </p>

                        <p class="card-text">
                            <label for="jmlh_kg"><b> Jumlah /kg :</b></label>
                            <?= $setor['jmlh_kg']; ?>
                        </p>

                        <p class="card-text">
                            <label for="total_harga"><b> Total harga :</b></label>
                            <?= $setor['total_harga']; ?>
                        </p>

                        <p class="card-text">
                            <label for="tgl_setor"><b> Tgl Setor :</b></label>
                            <?= $setor['tgl_setor']; ?>
                        </p>

                        <a href="<?= base_url("setor/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>