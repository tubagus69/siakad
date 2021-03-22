<div class="row">
  <div class="col-md-6">
    <div class="card">
  <div class="card-header">
    <h4 class="card-title">Visi Sekolah</h4>
  </div>
  <div class="card-body">
          <p style="font-size: 120%"><?=$sekolah['visi']?>    </p>
  </div>
</div>
  </div>
  <div class="col-md-6">
    <div class="card">
  <div class="card-header">
    <h4 class="card-title">Misi Sekolah</h4>
  </div>
  <div class="card-body">
          <p style="font-size: 120%"><?=$sekolah['misi']?>    </p>
  </div>
</div>
  </div>
</div>


<?php
  if($this->session->userdata('tipe')=='admin')
  {
    ?>
<div class="row" style="margin-top: 2%">
  <div class="col-md-12">
    <div class="card">
  <div class="card-header">
    <h4 class="card-title">Identitas Diri</h4>
  </div>
  <?=$this->session->flashdata('pesan')?>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3">
        <img src="<?=base_url('assets/img/profile/').$this->session->userdata('foto')?>" style="width: 100%" class="img-thumbnail">
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4">
            <p style="font-size: 130%">ID admin</p>
          </div>
          <div class="col-md-8">
          <p style="font-size: 130%">: <?=$this->session->userdata('id_admin')?></p>
        </div>
        <div class="col-md-4">
            <p style="font-size: 130%">NIP</p>
          </div>
          <div class="col-md-8">
          <p style="font-size: 130%">: <?=$this->session->userdata('nip')?></p>
        </div>
          <div class="col-md-4">
            <p style="font-size: 130%">Nama</p>
          </div>
          <div class="col-md-8">
          <p style="font-size: 130%">: <?=$this->session->userdata('nama_admin')?></p>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-warning form-control" data-toggle="modal" data-target="#editadmin">Edit</button>
        </div>

<div class="modal fade" id="editadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/admin/edit_admin')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">Nama</div>
          <div class="col-md-6">Password</div>
          <div class="col-md-6">
            <input type="hidden" name="id_admin" value="<?=$this->session->userdata('id_admin')?>">
            <input type="text" name="nama" class="form-control" value="<?=$this->session->userdata('nama_admin')?>">
          </div>
          <div class="col-md-6">
            <input type="password" name="password" class="form-control" value="<?=$this->session->userdata('password')?>">
          </div>
          <div class="col-md-12">Foto</div>
          <div class="col-md-12">
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

        </div>
      </div>
    </div>
  </div>
  </div>
</div>
  </div>
    <?php
  } else{
      ?>
      <div class="row" style="margin-top:5%">
  <div class="col-md-6">
    <div class="card">
  <div class="card-header">
    <h4 class="card-title">Kurikulum Aktif</h4>
  </div>
  <div class="card-body">
          <p style="font-size: 120%"><?=$kurikulum['nama_kurikulum']?> </p>
  </div>
</div>
  </div>  
</div>
      <?php
  }
?>
</div>


    