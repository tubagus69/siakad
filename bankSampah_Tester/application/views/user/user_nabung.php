<div class="container">
    <div class="row mt-1">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="text-center card-header">
                    Nabung Sampah
                </div>
                <div class="card-body">

                    <?php if (validation_errors()) : ?>
                        <div class="aler alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama_petugas" class="form-label">Nama Teller</label>
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" aria-describedby="nama_petugasHelp">
                        </div>

                        <div class="mb-3">
                            <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
                            <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" aria-describedby="nama_nasabahHelp">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_transaksi" class="form-label">Tgl Transaksi</label>
                            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" aria-describedby="tgl_transaksiHelp">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                            <select class="form-control" id="jenis_sampah" name="jenis_sampah">
                                <?php foreach ($jenis_sampah as $key) : ?>
                                    <option value="<?= $key ?>" selected><?= $key ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kategori_sampah" class="form-label">Kategori Sampah</label>
                            <input type="text" class="form-control" id="kategori_sampah" name="kategori_sampah" aria-describedby="kategori_sampahHelp">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_kg" class="form-label">Jumlah kg</label>
                            <input type="text" class="form-control" id="jumlah_kg" name="jumlah_kg" aria-describedby="jumlah_kgHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Tabungan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>