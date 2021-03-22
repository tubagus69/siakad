<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail nabungan
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama Teller:</b>
                        <?= $nabung['nama_petugas']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="nama_nasabah"><b>Nama Nasabah : </b></label>
                            <?= $nabung['nama_nasabah']; ?>
                        </p>

                        <p class="card-text">
                            <label for="tgl_transaksi"><b> Tgl Transaksi :</b></label>
                            <?= $nabung['tgl_transaksi']; ?>
                        </p>

                        <p class="card-text">
                            <label for="jenis_sampah"><b>Jenis Sampah : </b></label>
                            <?= $nabung['jenis_sampah']; ?>
                        </p>

                        <p class="card-text">
                            <label for="kategori_sampah"><b> Kategori Sampah :</b></label>
                            <?= $nabung['kategori_sampah']; ?>
                        </p>

                        <p class="card-text">
                            <label for="jumlah_kg"><b> Jumlah /kg :</b></label>
                            <?= $nabung['jumlah_kg']; ?>
                        </p>

                        <a href="<?= base_url("Nabung/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>