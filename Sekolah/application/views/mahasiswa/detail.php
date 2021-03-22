<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Data Guru
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
          <p class="card-text">
            <label for=""><b>Email : </b></label>
              <?= $mahasiswa['email']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>NIM : </b></label>
              <?= $mahasiswa['nim']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>Jurursan : </b></label>
              <?= $mahasiswa['jurusan']; ?>
          </p>
          <a href="<?= base_url() ;?>mahasiswa" class ="btn btn-primary float-right">
            <i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>