<?php
$sekolah=$this->m_default->get_data('tblsekolah')->row_array();
?>
<div class="card">
  <div class="card-body">
    
    <?=$this->session->flashdata('pesan')?>
    <form action="<?=base_url('index.php/sekolah/proses_update_sekolah')?>" method="post">
      <div class="row" style="padding: 1%">
        <div class="row">
      <div class="col-md-3">
      Nama Sekolah (*)
      </div>
      <div class="col-md-3">
        NPSN (*)
      </div>
      <div class="col-md-3">
        NSS (*)
      </div>
      <div class="col-md-3">
        Alamat Sekolah (*)
      </div>
      <div class="col-md-3">
        <input type="hidden" name="id_sekolah" value="<?=$sekolah['id_sekolah']?>">
        <input type="text" name="nama_sekolah" class="form-control" value="<?=$sekolah['nama_sekolah']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="npsn" class="form-control"
        value="<?=$sekolah['npsn']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="nss" class="form-control" value="<?=$sekolah['nss']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="alamat" class="form-control" value="<?=$sekolah['alamat_sekolah']?>">  
      </div>
      </div>
      <div class="row" style="margin-top:1%">
      <div class="col-md-3">
      Kode Pos (*)
      </div>
      <div class="col-md-3">
        Nomor Telepon (*)
      </div>
      <div class="col-md-3">
        Kelurahan (*)
      </div>
      <div class="col-md-3">
        Kecamatan (*)
      </div>
      <div class="col-md-3">
        <input type="text" name="kode_pos" class="form-control" value="<?=$sekolah['kode_pos']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control" value="<?=$sekolah['no_telp']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="kelurahan" class="form-control" value="<?=$sekolah['kelurahan']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="kecamatan" class="form-control" value="<?=$sekolah['kecamatan']?>">  
      </div>
    </div>
      <div class="row" style="margin-top:1%">
      <div class="col-md-3">
      Kabupaten (*)
      </div>
      <div class="col-md-3">
        Provinsi (*)
      </div>
      <div class="col-md-3">
        Website
      </div>
      <div class="col-md-3">
        Email
      </div>
      <div class="col-md-3">
        <input type="text" name="kabupaten" class="form-control" value="<?=$sekolah['kabupaten']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="provinsi" class="form-control" value="<?=$sekolah['provinsi']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="website" class="form-control" value="<?=$sekolah['website']?>">  
      </div>
      <div class="col-md-3">
        <input type="text" name="email" class="form-control" value="<?=$sekolah['email']?>">  
      </div>
      <div class="col-md-6"> Visi</div>
      <div class="col-md-6"> Misi</div>
      <div class="col-md-6">
        <textarea name="visi" class="form-control"><?=$sekolah['visi']?></textarea>
      </div>
      <div class="col-md-6">
        <textarea name="misi" class="form-control"><?=$sekolah['misi']?></textarea>
      </div>
    </div>
    
    <div class="col-md-3" style="margin-top:1%">
      <input type="submit" name="" value="Update Data" class="btn btn-success">&nbsp;&nbsp;<span style="color:red">(*) Wajib Diisi</span>
    </div>

  </div>
    </form>
  </div>
</div>