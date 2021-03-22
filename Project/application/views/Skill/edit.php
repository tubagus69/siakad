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
        <?php echo 
        form_open('Skill/edit/'.$pemain['id']);?>
        
        
        
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $pemain['id'] ;?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $pemain['nama'] ;?>">
            </div>
            <div class="form-group">
              <label for="speed">Speed</label>
              <input type="text" class="form-control" id="speed" name="speed" value="<?= $pemain['speed'] ;?>">
            </div>
            <div class="form-group">
              <label for="drible">Dribble</label>
              <input type="text" class="form-control" id="drible" name="drible" value="<?= $pemain['drible'] ;?>">
            </div>
            <div class="form-group">
              <label for="power">Power</label>
              <input type="text" class="form-control" id="power" name="power" value="<?= $pemain['power'] ;?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
          <?php echo 
          form_close();?>
          
        </div>
      </div>
    </div>
  </div>
</div>