<div class="controller">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Siswa
                </div>
                <div class="card-body">
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ;?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $siswa['id'];?>">
                    <div class="form-group">
                        <label for="id"> id </label>
                        <input type="number" class="form-control" id="id" name="id" 
                        value="<?= $siswa ['id'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="nama"> nama </label>
                        <input type="text" class="form-control" id="nama" name="nama" 
                        value="<?= $siswa ['nama'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> alamat </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" 
                        value="<?= $siswa ['alamat'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="nim"> nim </label>
                        <input type="number" class="form-control" id="nim" name="nim" 
                        value="<?= $siswa ['nim'] ;?>">
                    </div>
                    <button type="Submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                    