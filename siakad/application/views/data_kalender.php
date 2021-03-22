  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Jadwal Akademik</h5>
    <?=$this->session->flashdata('pesan')?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Pelaksanaan</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_kalender as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kalender/edit_kalender')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row" style="margin-top:1%">
          <div class="col-md-6">Tanggal Mulai</div>
          <div class="col-md-6">Tanggal Selesai</div>
          <div class="col-md-6">
        <input type="hidden" name="id_kalender" class="form-control" value="<?=$row['id_kalender']?>">
        <input type="date" name="tgl_mulai" class="form-control" value="<?=$row['tgl_mulai']?>">
      </div>
      <div class="col-md-6">
        <input type="date" name="tgl_selesai" class="form-control" value="<?=$row['tgl_selesai']?>">
      </div>
      <div class="col-md-12">Keterangan</div>
      <div class="col-md-12">
        <textarea name="keterangan" class="form-control"><?=$row['keterangan']?></textarea>
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
          <td>
            <?php
            if($row['tgl_mulai']==$row['tgl_selesai']){
              echo date('d F Y',strtotime($row['tgl_mulai']));
            }
            else{
              echo date('d F Y',strtotime($row['tgl_mulai']))." - ".date('d F Y',strtotime($row['tgl_selesai']));
            }
            ?>
          </td>
          <td>
            <?=$row['keterangan']?>
            </td>
          <td>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/kalender/hapus_kalender/').$row['id_kalender']?>">
            <button class="btn btn-danger">Hapus</button></td>
            </a>
          </tr>
          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-2">
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_kurikulum">
    Tambah Jadwal
  </button>
    </div>
    <div class="col-md-3">
      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#kalender_akademik">
    Lihat Kalender Akademik
  </button>
    </div>
  </div>

  <div class="modal fade" id="tambah_kurikulum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kalender/tambah_kalender')?>" method="post">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kalender</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Tanggal Mulai</div>
          <div class="col-md-6">Tanggal Selesai</div>
          <div class="col-md-6">
        <input type="date" name="tgl_mulai" class="form-control">
      </div>
      <div class="col-md-6">
        <input type="date" name="tgl_selesai" class="form-control">
      </div>
      <div class="col-md-12">Keterangan</div>
      <div class="col-md-12">
        <textarea name="keterangan" class="form-control"></textarea>
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

<div class="modal fade" id="kalender_akademik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kalender Akademik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Pelaksanaan</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    foreach ($list_kalender as $row) {
      ?>
      <tr>
    <th scope="row"><?=$i?></th>
      <td>
      <?php
        if($row['tgl_mulai']==$row['tgl_selesai']){
          echo date('d F Y',strtotime($row['tgl_mulai']));}
        else{
          echo date('d F Y',strtotime($row['tgl_mulai']))." - ".date('d F Y',strtotime($row['tgl_selesai']));
          }
          ?>
        </td>
    <td>
      <?=$row['keterangan']?>
      </td>
    </tr>
      <?php
    $i++; }
    ?>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

    