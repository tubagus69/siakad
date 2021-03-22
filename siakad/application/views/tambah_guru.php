<div class="card">
  <div class="card-body">
    
    <?php
$pesan=$this->session->flashdata('pesan');
    $alert=explode("\n",$pesan);
    if(count($alert)>1){
    echo '<script>alert("'.$alert[0].'")</script>';  
    }
    ?>
    <?php echo $this->session->flashdata('pesan1');?>
    <form action="<?=base_url('index.php/guru/proses_tambah_guru')?>" method="post" enctype="multipart/form-data">
      <div class="row" style="padding: 1%">
        <div class="row">
      <div class="col-md-3">
      NIP (*)
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
        
        <input type="text" name="nip" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="text" name="tempat_lahir" class="form-control"> 
      </div>
      <div class="col-md-3">
        <input type="date" name="tanggal_lahir" class="form-control">
      </div>
      </div>
      <div class="row" style="margin-top:1%">
      <div class="col-md-3">
      Alamat (*)
      </div>
      <div class="col-md-3">
        Jabatan (*)
      </div>
      <div class="col-md-3">
        Nomor Telepon
      </div>
      <div class="col-md-3">
       Jenis Kelamin (*)
      </div>
      <div class="col-md-3">
        <input type="text" name="alamat" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="text" name="jabatan" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="text" name="no_telp" class="form-control">
      </div>
      <div class="col-md-3">
        <select name="jk" class="form-control">
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
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
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <input type="text" name="agama" class="form-control"> 
      </div>
      <div class="col-md-3">
        <input type="text" name="password" class="form-control"> 
      </div>
      <div class="col-md-3">
        <input type="file" name="foto" class="form-control">
      </div>

    </div>
    
    <div class="col-md-3" style="margin-top:1%">
      <input type="submit" name="" value="Tambah Data" class="btn btn-success">&nbsp;&nbsp;<span style="color:red">(*) Wajib Diisi</span>
    </div>

  </div>
    </form>
  </div>
</div>