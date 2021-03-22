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
              <label for="foto">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" value="<?= $mahasiswa['foto'] ;?>">
            </div>
            <div class="form-group">
              <label for="nim">Tanggal Lahir</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ;?>">
            </div>
            <div class="form-group">
              <label for="email">Club</label>
              <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ;?>">
            </div>
            <div class="form-group">
              <table for="jurusan">Posisi</table>
              <select name="jurusan" id="jurusan" class="form-control">
                <?php foreach($jurusan as $key): ?>
                  <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>