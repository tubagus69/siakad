<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2>Form Tambah Data</h2>
        </div>
        <div class="card-body">
        <?php if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors() ?>
          </div>
        <?php endif; ?>
          <form action="" method="post">
            
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="speed">speed</label>
              <input type="text" class="form-control" id="speed" name="speed" >
            </div>
            <div class="form-group">
              <label for="drible">Dribble</label>
              <input type="text" class="form-control" id="drible" name="drible">
            </div>
            <div class="form-group">
              <label for="power">Power</label>
              <input type="text" class="form-control" id="power" name="power">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>