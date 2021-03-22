<div class="card">
  <div class="card-body">
    
    <?=$this->session->flashdata('pesan')?>
    <?php print_r($this->session->flashdata('pesan1'));?>
    <form action="<?=base_url('index.php/jadwal/proses_edit_jadwal')?>" method="post">
      <div class="row">
        <div class="col-md-6">Hari</div>
        <div class="col-md-6">Kelas</div>
        <div class="col-md-6">
          <input type="hidden" name="id_jadwal" value="<?=$this->uri->segment(3)?>">
          <select name="hari" class="form-control">
            <option value="1" <?php if($jadwal['hari']=='1'){echo 'selected';}?>>Senin</option>
            <option value="2" <?php if($jadwal['hari']=='2'){echo 'selected';}?>>Selasa</option>
            <option value="3" <?php if($jadwal['hari']=='3'){echo 'selected';}?>>Rabu</option>
            <option value="4" <?php if($jadwal['hari']=='4'){echo 'selected';}?>>Kamis</option>
            <option value="5" <?php if($jadwal['hari']=='5'){echo 'selected';}?>>Jumat</option>
            <option value="6" <?php if($jadwal['hari']=='6'){echo 'selected';}?>>Sabtu</option>
          </select>
        </div>
        <div class="col-md-6">
        <select name="kelas" class="form-control">
          <?php
          foreach ($list_kelas as $row2) {
            ?>
            <option value="<?=$row2['id_kelas']?>" <?php if($jadwal['id_kelas']==$row2['id_kelas']){echo 'selected';}?>><?=$row2['nama_kelas']?></option>
            <?php
          }
          ?>
        </select>
        </div>
        <div class="col-md-12">Jadwal</div>
        <div class="col-md-12">
          <textarea name="jadwal" class="form-control"><?=$jadwal['jadwal']?></textarea>
        </div>
        <div class="col-md-3" style="margin-top: 1%">
          <input type="submit" name="" value="Simpan" class="btn btn-success">
        </div>
      </div>
    </form>
  </div>
</div>