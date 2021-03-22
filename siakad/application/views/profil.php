<?php
if($this->session->userdata('tipe')=='guru')
{
  ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
      <div class="card-body">
    <?=$this->session->flashdata('pesan')?>
    <div class="row">
      <div class="col-md-3">
        <img src="<?=base_url('assets/img/profile/').$guru['foto']?>" style="width: 100%" class="img-thumbnail">
      </div>
      <div class="col-md-4">
        <table class="table">
  <tbody>
    <tr>
      <td>ID Guru</td>
      <td><?=$guru['id_guru']?></td>
    </tr>
    <tr>
      <td>NIP</td>
      <td><?=$guru['nip']?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?=$guru['nama_guru']?></td>
    </tr>
    <tr>
      <td>TTL</td>
      <td><?=$guru['tempat_lahir'].",".$guru['tgl_lahir']?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?=$guru['alamat']?></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-md-4">
        <table class="table">
  <tbody>
    <tr>
      <td>Jabatan</td>
      <td><?=$guru['jabatan']?></td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td><?=$guru['no_telp']?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?=$guru['jenis_kelamin']?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?=$guru['agama']?></td>
    </tr>
    <tr>
      <td colspan="2">
        <button type="button" class="btn btn-warning form-control" data-toggle="modal" data-target="#editguru">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
<div class="modal fade" id="editguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/guru/edit_guru')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
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
        <input type="hidden" name="id_guru" value="<?=$guru['id_guru']?>">
        <input type="text" name="nip" class="form-control" value="<?=$guru['nip']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="nama" class="form-control" value="<?=$guru['nama_guru']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="tempat_lahir" class="form-control" value="<?=$guru['tempat_lahir']?>"> 
      </div>
      <div class="col-md-3">
        <input type="date" name="tanggal_lahir" class="form-control" value="<?=$guru['tgl_lahir']?>">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Alamat</div>
          <div class="col-md-3">Jabatan</div>
          <div class="col-md-3">Nomor Telepon</div>
          <div class="col-md-3">Agama</div>
          <div class="col-md-3">
        <input type="text" name="alamat" class="form-control" value="<?=$guru['alamat']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="jabatan" class="form-control" value="<?=$guru['jabatan']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control" value="<?=$guru['no_telp']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="agama" class="form-control" value="<?=$guru['agama']?>">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Password</div>
          <div class="col-md-3">Foto</div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <input type="password" name="password" class="form-control" value="<?=$guru['password']?>">
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

        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
  <?php
}else{
  ?>

<div class="row" style="margin-top: 2%">
  <div class="col-md-12">
    <div class="card">
  <div class="card-header">
    <h4 class="card-title">Identitas Diri</h4>
  </div>
  <div class="card-body">
    <?=$this->session->flashdata('pesan')?>
    <div class="row">
      <div class="col-md-3">
        <img src="<?=base_url('assets/img/profile/').$siswa['foto']?>" style="width: 100%" class="img-thumbnail">
      </div>
      <div class="col-md-4">
        <table class="table">
  <tbody>
    <tr>
      <td>ID Siswa</td>
      <td><?=$siswa['id_siswa']?></td>
    </tr>
    <tr>
      <td>NIS</td>
      <td><?=$siswa['nis']?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?=$siswa['nama_siswa']?></td>
    </tr>
    <tr>
      <td>TTL</td>
      <td><?=$siswa['tempat_lahir'].",".$siswa['tgl_lahir']?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?=$siswa['alamat']?></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-md-4">
        <table class="table">
  <tbody>
    <tr>
      <td>Kelas</td>
      <td>
        <?php
        $where=array('id_kelas',$siswa['id_kelas']);
        $kelas_siswa=$this->m_default->get_data_detail($where,'tblkelas')->row_array();
        echo $kelas_siswa['nama_kelas'];
        ?>
        </td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td><?=$siswa['no_telp']?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?=$siswa['jenis_kelamin']?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?=$siswa['agama']?></td>
    </tr>
    <tr>
      <td colspan="2">
        <button type="button" class="btn btn-warning form-control" data-toggle="modal" data-target="#editguru">Edit</button>
      </td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="editguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/siswa/proses_edit_siswa')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">NIS</div>
          <div class="col-md-3">Nama</div>
          <div class="col-md-3">Tempat Lahir</div>
          <div class="col-md-3">Tanggal Lahir</div>
          <div class="col-md-3">
        <input type="hidden" name="id_siswa" value="<?=$siswa['id_siswa']?>">
        <input type="text" name="nis" class="form-control" value="<?=$siswa['nis']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="nama" class="form-control" value="<?=$siswa['nama_siswa']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="tempat_lahir" class="form-control" value="<?=$siswa['tempat_lahir']?>"> 
      </div>
      <div class="col-md-3">
        <input type="date" name="tanggal_lahir" class="form-control" value="<?=$siswa['tgl_lahir']?>">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-3">Alamat</div>
          <div class="col-md-3">Nomor Telepon</div>
          <div class="col-md-3">Agama</div>
          <div class="col-md-3">Password</div>
          <div class="col-md-3">
        <input type="text" name="alamat" class="form-control" value="<?=$siswa['alamat']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control" value="<?=$siswa['no_telp']?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="agama" class="form-control" value="<?=$siswa['agama']?>">
      </div>
      <div class="col-md-3">>
        <input type="hidden" name="semester" value="<?=$siswa['semester']?>">
        <input type="hidden" name="kelas" value="<?=$siswa['id_kelas']?>">
        <input type="password" name="password" value="<?=$siswa['password']?>" class="form-control">
      </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-md-1">Foto</div>
          </div>
          <div class="row">
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

        </div>
      </div>
    </div>
  </div>
  </div>
</div>
  <?php
}
?>
