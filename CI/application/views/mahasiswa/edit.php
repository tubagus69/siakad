<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <?php if(validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $mahasiswa["id"]?>">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa["nama"]?>">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa["nim"]?>">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa["email"]?>">
                        </div>
                        <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option selected><?=$mahasiswa["jurusan"] ?></option>
                            <option value="Kimia">Kimia</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Mesin">Mesin</option>
                            <option value="Industri">Industri   </option>
                        </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>