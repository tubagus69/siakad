<?php
$cek_sekolah=$this->m_default->get_data('tblsekolah');
    if($cek_sekolah->num_rows()==0){
      ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tambahkan Data Sekolah</h5>
    <?=$this->session->flashdata('pesan')?>
    <form action="<?=base_url('index.php/sekolah/tambah_data_sekolah')?>" method="post">
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
        <input type="text" name="nama_sekolah" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="npsn" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="nss" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="alamat" class="form-control">  
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
        <input type="text" name="kode_pos" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="kelurahan" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="kecamatan" class="form-control">  
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
        <input type="text" name="kabupaten" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="provinsi" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="website" class="form-control">  
      </div>
      <div class="col-md-3">
        <input type="text" name="email" class="form-control">  
      </div>
      <div class="col-md-6">
        Visi (*)
      </div>
      <div class="col-md-6">
        Misi (*)
      </div>
      <div class="col-md-6" style="margin-left: -1%">
        <textarea name="visi" class="form-control"></textarea>
      </div>
      <div class="col-md-6">
        <textarea name="misi" class="form-control"></textarea>
      </div>
    </div>
    
    
    <div class="col-md-3" style="margin-top:1%">
      <input type="submit" name="" value="Tambahkan" class="btn btn-success">&nbsp;&nbsp;<span style="color:red">(*) Wajib Diisi</span>
    </div>

  </div>
    </form>
  </div>
</div>
     <?php
}
else{
  $sekolah=$cek_sekolah->row_array();
  ?>

  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Identitas Sekolah</h5>
    <table class="table">
  
  <tbody>
    <tr>
      <th scope="row" width="25%">Nama Sekolah</th>
      <td><?=$sekolah['nama_sekolah']?></td>
    </tr>
    <tr>
      <th scope="row">NPSN</th>
      <td><?=$sekolah['npsn']?></td>
    </tr>
    <tr>
      <th scope="row">NSS</th>
      <td><?=$sekolah['nss']?></td>
    </tr>
        <tr>
      <th scope="row">Alamat Sekolah</th>
      <td><?=$sekolah['alamat_sekolah']?></td>
    </tr>
    <tr>
      <th scope="row" width="25%">Kode Pos</th>
      <td><?=$sekolah['kode_pos']?></td>
    </tr>
    <tr>
      <th scope="row">No Telepon</th>
      <td><?=$sekolah['no_telp']?></td>
    </tr>
    <tr>
      <th scope="row">Kelurahan</th>
      <td><?=$sekolah['kelurahan']?></td>
    </tr>
        <tr>
      <th scope="row">Kecamatan</th>
      <td><?=$sekolah['kecamatan']?></td>
    </tr>
    <tr>
      <th scope="row" width="25%">Kabupaten</th>
      <td><?=$sekolah['kabupaten']?></td>
    </tr>
    <tr>
      <th scope="row">Provinsi</th>
      <td><?=$sekolah['provinsi']?></td>
    </tr>
    <tr>
      <th scope="row">Website</th>
      <td><?=$sekolah['website']?></td>
    </tr>
        <tr>
      <th scope="row">Email</th>
      <td><?=$sekolah['email']?></td>
    </tr>
    <tr>
      <th scope="row">Visi</th>
      <td><?=$sekolah['visi']?></td>
    </tr>
    <tr>
      <th scope="row">Misi</th>
      <td><?=$sekolah['misi']?></td>
    </tr>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-3">
    <a href="<?=base_url('index.php/sekolah/update_sekolah')?>"><button class="btn btn-warning">
    Update Data
  </button></a>
    </div>
  </div>
  </div>

</div>

    <?php
    }
     ?>