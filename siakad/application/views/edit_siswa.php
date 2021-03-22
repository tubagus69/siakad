<div class="card">
  <div class="card-body">
    
    <?=$this->session->flashdata('pesan')?>
    <form action="<?=base_url('index.php/user/proses_edit_siswa')?>" method="post" enctype="multipart/form-data">
      <div class="row" style="padding: 1%">
        <div class="row">
      <div class="col-md-3">
      NIS (*)
      </div>
      <div class="col-md-3">
        Nama (*)
      </div>
      <div class="col-md-3">
       Tempat Lahir (*)
      </div>
      <div class="col-md-3">
        Tanggal Lahir (*)
      </div>
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
      <div class="col-md-3">
      Alamat (*)
      </div>
      <div class="col-md-3">
        Kelas (*)
      </div>
      <div class="col-md-3">
        Semester (*)
      </div>
      <div class="col-md-3">
       Nomor Telepon
      </div>
      <div class="col-md-3">
        <input type="text" name="alamat" class="form-control" value="<?=$siswa['alamat']?>">
      </div>
      <div class="col-md-3">
        <select name="kelas" class="form-control">
          <?php
          foreach ($list_kelas as $row) {
            ?>
            <option value="<?=$row['id_kelas']?>"><?=$row['nama_kelas']?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="col-md-3">
        <input type="text" name="semester" class="form-control"  value="<?=$siswa['semester']?>"></div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control" value="<?=$siswa['no_telp']?>">
      </div>
    </div>
      <div class="row" style="margin-top:1%">
      <div class="col-md-3">
        Agama (*)
      </div>
      <div class="col-md-3">
        Password (*)
      </div>
      <div class="col-md-3">
        Foto
      </div>
      <div class="col-md-3">
        
      </div>
      <div class="col-md-3">
        <input type="text" name="agama" class="form-control" value="<?=$siswa['agama']?>">
      </div>
      <div class="col-md-3">
        <input type="password" name="password" class="form-control" value="<?=$siswa['password']?>">
      </div>
      <div class="col-md-3">
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="col-md-3"></div>
    </div>
    <div class="col-md-3" style="margin-top:1%">
      <input type="submit" name="" value="Update Data" class="btn btn-success">&nbsp;&nbsp;<span style="color:red">(*) Wajib Diisi</span>
    </div>

  </div>
    </form>
  </div>
</div>