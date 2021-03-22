  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Kurikulum</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kurikulum</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_kurikulum as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kurikulum/edit_kurikulum')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Nama Kurikulum</div>
          <div class="col-md-6">Status</div>
          <div class="col-md-6">
        <input type="hidden" name="id_kurikulum" value="<?=$row['id_kurikulum']?>">
        <input type="text" name="nama" class="form-control" value="<?=$row['nama_kurikulum']?>">
      </div>
      <div class="col-md-6">
        <select name="status" class="form-control">
          <option value="0" <?php if($row['status_kurikulum']==0){echo 'selected';}?>>Tidak Aktif</option>
          <option value="1" <?php if($row['status_kurikulum']==1){echo 'selected';}?>>Aktif</option>
        </select>
      </div>
        </div>        
      </div>
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
          <td><?=$row['nama_kurikulum']?></td>
          <td>
            <?php
            if($row['status_kurikulum']==0){
              echo 'Tidak Aktif';
            }
            else{
              echo 'Aktif';
            }
            ?>
            </td>
          <td>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/kurikulum/hapus_kurikulum/').$row['id_kurikulum']?>">
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
    Tambah Kurikulum
  </button>
    </div>
  </div>

  <div class="modal fade" id="tambah_kurikulum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kurikulum/tambah_kurikulum')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Nama Kurikulum</div>
          <div class="col-md-6">Status</div>
          <div class="col-md-6">
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="col-md-6">
        <select name="status" class="form-control">
          <option value="0">Tidak Aktif</option>
          <option value="1">Aktif</option>
        </select>
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

    