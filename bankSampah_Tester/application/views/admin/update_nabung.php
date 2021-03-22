<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header">
                    Edit Tabungan
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
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= $nabung['nama_petugas'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
                            <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" value="<?= $nabung['nama_nasabah'] ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="tgl_transaksi" class="form-label">Tgl Transaksi</label>
                            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="<?= $nabung['tgl_transaksi']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="jenis_sampah"> Jenis Sampah </label>
                            <select class="form-control" id="jenis_sampah" name="jenis_sampah">
                                <?php foreach ($jenis_sampah as $key) : ?>
                                    <option value="<?php echo $key ?>" selected><?= $key ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class=" mb-3">
                            <label for="kategori_sampah" class="form-label">Kategori Sampah</label>
                            <input type="text" class="form-control" id="kategori_sampah" name="kategori_sampah" value="<?= $nabung['kategori_sampah']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="jumlah_kg" class="form-label">Jumlah /kg</label>
                            <input type="text" class="form-control" id="jumlah_kg" name="jumlah_kg" value="<?= $nabung['jumlah_kg']; ?>">
                        </div>

                        <button type=" submit" name="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url("nabung/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>