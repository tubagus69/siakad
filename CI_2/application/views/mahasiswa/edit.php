<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>Form Edit Data</h2>
        </div>
        <div class="card-body">
        <?php if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors() ?>
          </div>
        <?php endif; ?>
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $mahasiswa['id'] ;?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ;?>">
            </div>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ;?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ;?>">
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
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>