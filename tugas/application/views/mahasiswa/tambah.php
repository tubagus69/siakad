<div class="controller">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ;?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="nama"> nama </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim"> nim </label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="email"> email </label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan"> jurusan </label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <?php foreach ($jurusan as $key) :?>
                            <option value="<?= $key; ?>"selected><?= $key; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <button type="Submit" name="Submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                    