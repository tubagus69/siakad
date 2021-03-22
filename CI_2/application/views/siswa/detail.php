<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Data Siswa
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $siswa['nama']; ?></h5>
          <p class="card-text">
            <label for=""><b>Nama : </b></label>
              <?= $siswa['nama']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>NIM : </b></label>
              <?= $siswa['nim']; ?>
          </p>
          <p class="card-text">
            <label for=""><b>Alamat : </b></label>
              <?= $siswa['alamat']; ?>
          </p>
          <a href="<?= base_url() ;?>siswa" class ="btn btn-primary float-right">
            <i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>