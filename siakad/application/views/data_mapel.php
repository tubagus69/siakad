  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Mata Pelajaran</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mapel</th>
      <th scope="col">KD Mapel</th>
      <th scope="col">Kurikulum</th>
      <th scope="col">KKM</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_mapel as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/mapel/edit_mapel')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-4">Nama Mapel</div>
          <div class="col-md-4">KD Mapel</div>
          <div class="col-md-4">KKM</div>
          <div class="col-md-4">
        <input type="hidden" name="kode_mapel" value="<?=$row['kode_mapel']?>">
        <input type="text" name="nama" class="form-control" value="<?=$row['nama_mapel']?>" class="form-control">
      </div>
      <div class="col-md-4">
        <input type="text" name="kd_mapel" value="<?=$row['kd_mapel']?>" class="form-control">
        </div>        
        <div class="col-md-4">
        <input type="text" name="kkm" value="<?=$row['kkm']?>" class="form-control">
        </div>
      </div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

          <tr>
          <td><?=$i?></td>
          <td><?=$row['nama_mapel']?></td>
          <td><?=$row['kd_mapel']?></td>
          <td><?=$row['nama_kurikulum']?></td>
          <td><?=$row['kkm']?></td>
          <td>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/mapel/hapus_mapel/').$row['kode_mapel']?>">
            <button class="btn btn-danger">Hapus</button></td>
            </a>
          </tr>
          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-3">
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_kurikulum">
    Tambah Mapel
  </button>
    </div>
  </div>

  <div class="modal fade" id="tambah_kurikulum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/mapel/tambah_mapel')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-4">Nama Mapel</div>
          <div class="col-md-4">KD Mapel</div>
          <div class="col-md-4">KKM</div>
          <div class="col-md-4">
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="col-md-4">
        <input type="text" name="kd_mapel" class="form-control">
      </div>
      <div class="col-md-4">
        <input type="text" name="kkm" class="form-control">
      </div>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
    </form>
  </div>
</div>

  </div>
</div>

    