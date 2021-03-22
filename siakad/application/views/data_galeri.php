  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Foto</h5>
    <?=$this->session->flashdata('pesan1')?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width: 50%" >Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_foto as $row) {
          ?>

          <tr>
          <td><?=$i?></td>
          <td>
          <img src="<?=base_url('assets/img/galeri/').$row['foto']?>" style="width: 50%">
            </td>
          <td>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/galeri/hapus_galeri/').$row['id_galeri']?>">
            <button class="btn btn-danger">Hapus</button>
            </a>
            </td>
          </tr>

<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="<?=base_url('index.php/galeri/edit_galeri')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-12">Upload Foto</div>
          <div class="col-md-12">
            <input type="hidden" name="id_galeri" value="<?=$row['id_galeri']?>">
            <input type="file" name="foto" class="form-control">
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


          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-3">
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_foto">
    Tambah Foto
  </button>
    </div>
  </div>

  <div class="modal fade" id="tambah_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/galeri/tambah_galeri')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-12">Upload Foto</div>
          <div class="col-md-12">
            <input type="file" name="foto" class="form-control">
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

    