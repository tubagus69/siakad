<div class="card">
  <div class="card-body">
    
    <form action="<?=base_url('index.php/nilai/proses_edit_nilai')?>" method="post">
      <div class="row" style="padding: 1%">
        <?=$this->session->flashdata('pesan')?>
        <div class="row">
      <div class="col-md-3">
      Keterangan (*)
      </div>
      <div class="col-md-3">
        Semester (*)
      </div>
      <div class="col-md-3">
        Nilai (*)
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <input type="hidden" name="id_nilai" value="<?=$this->uri->segment(3)?>">
        <input type="text" name="keterangan" value="<?=$nilai['keterangan']?>" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="text" name="semester" value="<?=$nilai['semester']?>" class="form-control">
      </div>
      <div class="col-md-3">
        <input type="number" name="nilai" value="<?=$nilai['nilai']?>" class="form-control">
      </div>
      
    </div>
    <div class="col-md-3" style="margin-top:1%">
      <input type="submit" name="" value="Update Data" class="btn btn-success">&nbsp;&nbsp;<span style="color:red">(*) Wajib Diisi</span>
    </div>

  </div>
    </form>
  </div>
</div>