  <div class="card">
  <?php
$pesan=$this->session->flashdata('pesan');
    $alert=explode("\n",$pesan);
    if(count($alert)>1){
    echo '<script>alert("'.$alert[0].'")</script>';  
    }
    ?>

  <div class="card-body">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Semester</th>
      <th scope="col">List Nilai  </th>
    </tr> 
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($siswa as $row) {
          ?>
          <tr>
          <td><?=$i?></td>
          <td><?=$row['nis']?></td>
          <td><?=$row['nama_siswa']?></td>
          <td><?=$row['semester']?></td>
          <td>
          <a href="<?=base_url('index.php/nilai/nilai_siswa1/').$row['id_siswa']?>">
              <button class="btn btn-success">View</button>
            </a></td>
          </tr>

<div class="modal fade" id="view<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 150%;margin-left: -20%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Nilai Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">No.</div>
          <div class="col-md-3">Keterngan</div>
          <div class="col-md-2">Nilai</div>
          <div class="col-md-3">Semester</div>
          <div class="col-md-3">Action</div>
        </div>
        <?php
        $j=1;
        $id_siswa=$row['id_siswa'];
        $kode_mapel=$this->uri->segment(4);
        $nilai_siswa=$this->m_nilai->get_nilai_siswa($id_siswa,$kode_mapel)->result_array();
        foreach ($nilai_siswa as $row2) {
          ?> 
          <hr>
          <div class="row">
          <div class="col-md-1"><?=$j?></div>
          <div class="col-md-3"><?=$row2['keterangan']?></div>
          <div class="col-md-2"><?=$row2['nilai']?></div>
          <div class="col-md-3"><?=$row2['semester']?></div>
          <div class="col-md-3">
            <a href="<?=base_url('index.php/nilai/edit_nilai/').$row2['id_nilai']?>"><button class="btn btn-warning">
              Ubah
            </button></a>
              <a href="<?=base_url('index.php/nilai/hapus_nilai/').$row2['id_nilai']?>"><button class="btn btn-danger">
              Hapus
            </button></a>
          </div>
          </div>
          <?php
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
<button class="btn btn-success" data-toggle="modal" data-target="#tambah_nilai">
  Tambah Nilai Siswa
</button>

<div class="modal fade" id="tambah_nilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 150%;margin-left: -20%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah nilai siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('index.php/nilai/tambah_nilai')?>" method="post">
      <div class="modal-body">
        
        <div class="row">
          <div class="col-md-5">Nama Siswa</div>          
          <div class="col-md-2">Semester</div>
          <div class="col-md-3">Keterangan</div>
          <div class="col-md-2">Nilai</div>
          <div class="col-md-5">
            <select class="form-control" name="id_siswa">
              <?php
              $this->session->set_userdata('referred_from', current_url());
              foreach ($siswa as $row3) {
                ?>
                <option value="<?=$row3['id_siswa']?>"><?=$row3['nama_siswa']?></option>
                <?php
              }
              ?>
            </select>
          </div>          
          <div class="col-md-2">
            <input type="hidden" name="kode_mapel" value="<?=$this->uri->segment(4)?>">
            <input type="hidden" name="id_guru" value="<?=$this->session->userdata('id_guru')?>">
            <input type="text" name="semester" class="form-control">
          </div>
          <div class="col-md-3">
            <input type="text" name="keterangan" class="form-control">
          </div>
          <div class="col-md-2">
            <input type="number" name="nilai" class="form-control">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Nilai</button>
      </div>
    </form>
    </div>
  </div>
</div>

  </div>

</div>

    