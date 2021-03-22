  <div class="card">
  <div class="card-body">
    <form action="" method="post">
      <div class="row">
        <div class="col-md-2 ">
          <h5>Cari Siswa :</h5>
        </div>
      <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Masukkan NIS">
      </div>  
      <div class="col-md-2">
        <input type="submit" name="cari" value="Cari" class="btn btn-success">
      </div>
      </div>
    </form>
    <?php
    if(isset($_POST['cari'])){
      $where=array('nis'=>$this->input->post('search'));
      $siswa=$this->m_default->get_data_detail($where,'tblsiswa')->row_array();
      $where_kelas=array('id_kelas'=>$siswa['id_kelas']);
      $list_kelas=$this->m_default->get_data_detail($where_kelas,'tblkelas')->result_array();
    }
    ?>
    <h5 class="card-title">List Siswa</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jumlah Siswa</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_kelas as $row) {
          ?>

<div class="modal fade" id="view<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -102%;width: 250%">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 250%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">No</div>
          <div class="col-md-1">NIS</div>
          <div class="col-md-2">Nama</div>
          <div class="col-md-1">TTL</div>
          <div class="col-md-1">Alamat</div>
          <div class="col-md-1">Nomor Telepon</div>
          <div class="col-md-1">Semester</div>
          <div class="col-md-1">Jenis Kelamin</div>
          <div class="col-md-1">Agama</div>
          <div class="col-md-1">Foto</div>
          <div class="col-md-1">Action</div>
        </div>
        <?php
        $j=1;
        $data_kelas=$this->m_siswa->get_siswakelas($row['id_kelas'])->result_array();
        foreach ($data_kelas as $row2) {
          ?>
          <hr>
          <div class="row">
          <div class="col-md-1"><?=$j?></div>
          <div class="col-md-1"><?=$row2['nis']?></div>
          <div class="col-md-2"><?=$row2['nama_siswa']?></div>
          <div class="col-md-1"><?=$row2['tempat_lahir'].",<br>".$row2['tgl_lahir']?></div>
          <div class="col-md-1"><?=$row2['alamat']?></div>
          <div class="col-md-1"><?=$row2['no_telp']?></div>
          <div class="col-md-1"><?=$row2['semester']?></div>
          <div class="col-md-1"><?=$row2['jenis_kelamin']?></div>
          <div class="col-md-1"><?=$row2['agama']?></div>
          <div class="col-md-1">
            <img src="<?=base_url('assets/img/profile/').$row2['foto']?>" style="width: 100%">
          </div>
          <div class="col-md-1">
            <a href="<?=base_url('index.php/siswa/edit_siswa/').$row2['id_siswa']?>"><button class="btn btn-warning form-control">Edit</button><br></a>
              <a href="<?=base_url('index.php/siswa/hapus_siswa/').$row2['id_siswa']?>"><button class="btn btn-danger form-control" style="margin-top:5%">Hapus</button></a>
          </div>
          </div>
          <?php
        $j++; }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

          <tr>
          <td><?=$i?></td>
          <td style=""><?=$row['nama_kelas']?></td>
          <td style=""><?=$this->m_siswa->get_jumlah_siswa($row['id_kelas'])->row()->jumlah?></td>
          <td>
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#view<?=$i?>">View</button>
          </td>
          </tr>
          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-3">
    <a href="<?=base_url('index.php/siswa/tambah_siswa')?>"><button class="btn btn-success">
    Tambah Siswa
  </button></a>
    </div>
  </div>
  </div>

</div>

    