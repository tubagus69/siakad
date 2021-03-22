  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Admin</h5>
    <?=$this->session->flashdata('pesan')?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID Admin</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_admin as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/admin/edit_admin')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Nama</div>
          <div class="col-md-3">NIP</div>
          <div class="col-md-3">Password</div>
          <div class="col-md-3">Foto</div>          
          <div class="col-md-3">
        <input type="hidden" name="id_admin" value="<?=$row['id_admin']?>">
        <input type="text" name="nama" class="form-control" value="<?=$row['nama_admin']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="nip" class="form-control" value="<?=$row['nip']?>"> 
      </div>
      <div class="col-md-3">
        <input type="password" name="password" class="form-control" value="<?=$row['password']?>"> 
      </div>
      <div class="col-md-3">
        <input type="file" name="foto" class="form-control">
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
          <td><?=$row['id_admin']?></td>
          <td><?=$row['nip']?></td>
          <td><?=$row['nama_admin']?></td>
          <td style="width: 10%">
            <img src="<?=base_url('assets/img/profile/').$row['foto']?>" style="width: 100%">
          </td>
          <td>
            <button class="btn btn-warning form-control" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/admin/hapus_admin/').$row['id_admin']?>"><br>
            <button class="btn btn-danger form-control">Hapus</button></td>
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
    <button class="btn btn-success" data-toggle="modal" data-target="#tambah_admin" type="button">
    Tambah Admin
  </button>
    </div>
  </div>

<div class="modal fade" id="tambah_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/admin/tambah_admin')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-4">Nama</div>
          <div class="col-md-4">Nama</div>
          <div class="col-md-4">Password</div>
          <div class="col-md-4">
          <input type="text" name="nama" class="form-control">
          </div>
          <div class="col-md-4">
              <input type="nip" name="nip" class="form-control">
      </div>
      <div class="col-md-4">
              <input type="password" name="password" class="form-control">
      </div>
      <div class="col-md-12">
        Foto
      </div>
      <div class="col-md-6">
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

    