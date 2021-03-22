  <div class="card">
  <div class="card-body">
    <form action="" method="post">
      <div class="row">
        <div class="col-md-2 ">
          <h5>Cari Guru :</h5>
        </div>
      <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Masukkan Nama">
      </div>  
      <div class="col-md-2">
        <input type="submit" name="cari" value="Cari" class="btn btn-success">
      </div>
      </div>
    </form>
    <?php
    if(isset($_POST['cari'])){
      $list_guru=$this->m_guru->search_guru($this->input->post('search'))->result_array();
    }
    ?>
    <h5 class="card-title" style="margin-top: 2%">List Guru</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">TTL</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_guru as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/guru/edit_guru')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">NIP</div>
          <div class="col-md-3">Nama</div>
          <div class="col-md-3">Tempat Lahir</div>
          <div class="col-md-3">Tanggal Lahir</div>
          <div class="col-md-3">
        <input type="hidden" name="id_guru" value="<?=$row['id_guru']?>">
        <input type="text" name="nip" class="form-control" value="<?=$row['nip']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="nama" class="form-control" value="<?=$row['nama_guru']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="tempat_lahir" class="form-control" value="<?=$row['tempat_lahir']?>"> 
      </div>
      <div class="col-md-3">
        <input type="date" name="tanggal_lahir" class="form-control" value="<?=$row['tgl_lahir']?>">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Alamat</div>
          <div class="col-md-3">Jabatan</div>
          <div class="col-md-3">Nomor Telepon</div>
          <div class="col-md-3">Agama</div>
          <div class="col-md-3">
        <input type="text" name="alamat" class="form-control" value="<?=$row['alamat']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="jabatan" class="form-control" value="<?=$row['jabatan']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control" value="<?=$row['no_telp']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="agama" class="form-control" value="<?=$row['agama']?>">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Password</div>
          <div class="col-md-6">Foto</div>
          </div>
          <div class="row">

          <div class="col-md-3">
            <input type="password" name="password" value="<?=$row['password']?>" class="form-control">
          </div>
          <div class="col-md-6">
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
          <td style="width: 10%"><?=$row['nip']?></td>
          <td style="width:20%"><?=$row['nama_guru']?></td>
          <td style="width: 5%"><?=$row['tempat_lahir'].",<br>".$row['tgl_lahir']?></td>
          <td><?=$row['alamat']?></td>
          <td><?=$row['jabatan']?></td>
          <td><?=$row['no_telp']?></td>
          <td><?=$row['jenis_kelamin']?></td>
          <td><?=$row['agama']?></td>
          <td style="width: 10%">
            <img src="<?=base_url('assets/img/profile/').$row['foto']?>" style="width: 100%">
          </td>
          <td>
            <button class="btn btn-warning form-control" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/guru/hapus_guru/').$row['id_guru']?>"><br>
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
    <a href="<?=base_url('index.php/guru/tambah_guru')?>"><button class="btn btn-success">
    Tambah Guru
  </button></a>
    </div>
  </div>
  </div>

</div>

    