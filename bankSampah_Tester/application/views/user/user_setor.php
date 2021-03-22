<div class="container">
    <div class="row mt-1">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="text-center card-header">
                    Setor Sampah
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
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp">
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
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" aria-describedby="kategoriHelp">
                        </div>

                        <div class="mb-3">
                            <label for="harga_per_kg" class="form-label">Harga /kg</label>
                            <input type="text" class="form-control" id="harga_per_kg" name="harga_per_kg" aria-describedby="harga_per_kgHelp">
                        </div>

                        <div class="mb-3">
                            <label for="jmlh_kg" class="form-label">Jumlah kg</label>
                            <input type="text" class="form-control" id="jmlh_kg" name="jmlh_kg" aria-describedby="jmlh_kgHelp">
                        </div>

                        <div class="mb-3">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga" aria-describedby="total_hargaHelp">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_setor" class="form-label">Tgl Setor</label>
                            <input type="date" class="form-control" id="tgl_setor" name="tgl_setor" aria-describedby="tgl_setorHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Setor</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>