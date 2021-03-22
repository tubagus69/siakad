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
          <input type="hidden" name="id" value="<?= $siswa['id'] ;?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ;?>">
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" value="<?= $siswa['foto'] ;?>">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat'] ;?>">
            </div>
            <div class="form-group">
              <label for="nim">Tgl Lahir</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?= $siswa['nim'] ;?>">
            </div>
            <div class="form-group">
              <table for="keahlian">Posisi</table>
              <select name="keahlian" id="keahlian" class="form-control">
                <?php foreach($keahlian as $key): ?>
                  <option value="<?= $key ?>" selected><?=  $key ?></option>
                <?php endforeach;?>
              </select>
            </div>
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>