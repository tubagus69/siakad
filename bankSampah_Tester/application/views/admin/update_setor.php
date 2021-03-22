<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header">
                    Edit Setoran
                </div>

                <div class="card-body">

                    <?php if (validation_errors()) : ?>
                        <div class="aler alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $setor['nama'] ?>">
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
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $setor['kategori']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="harga_per_kg" class="form-label">harga_per_kg</label>
                            <input type="text" class="form-control" id="harga_per_kg" name="harga_per_kg" value="<?= $setor['harga_per_kg']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="jmlh_kg" class="form-label">Harga /kg</label>
                            <input type="text" class="form-control" id="jmlh_kg" name="jmlh_kg" value="<?= $setor['jmlh_kg']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga" value="<?= $setor['total_harga']; ?>">
                        </div>

                        <div class=" mb-3">
                            <label for="tgl_setor" class="form-label">Tgl Setor</label>
                            <input type="date" class="form-control" id="tgl_setor" name="tgl_setor" value="<?= $setor['tgl_setor']; ?>">
                        </div>
                        <button type=" submit" name="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url("setor/"); ?>" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>