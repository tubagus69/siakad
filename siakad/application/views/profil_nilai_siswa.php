  <div class="card">
  <div class="card-body">
    <h6>Kelas : <?=$list_mapel['nama_kelas']?></h6>
    <h6>Semester : <?=$this->session->userdata('semester')?></h6>
    <h6>Wali Siswa : 
      <?php
      $where=array('id_guru'=>$list_mapel['wali_kelas']);
      $guru=$this->m_default->get_data_detail($where,'tblguru')->row_array();
      echo $guru['nama_guru'];
      ?>
    </h6>
    <br>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mapel</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
      if($list_mapel['mapel']!=""){
      $data_mapel=explode(",",$list_mapel['mapel']);
        foreach ($data_mapel as $row) {
          ?>
          <tr>
          <td><?=$i?></td>
          <td><?=$row?></td>
          <td>
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#view<?=$i?>">Lihat Nilai</button>
          </td>
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
          <div class="col-md-2">No.</div>
          <div class="col-md-4">Keterangan</div>
          <div class="col-md-3">Nilai</div>
          <div class="col-md-3">Semester</div>
        </div>
        <?php
        $j=1;
        $id_siswa=$this->session->userdata('id_siswa');
        $kode_mapel=$this->m_mapel->get_idmapel($row)->row_array();
        $nilai_siswa=$this->m_nilai->get_nilai_siswa($id_siswa,$kode_mapel['kode'])->result_array();
        foreach ($nilai_siswa as $row2) {
          ?> 
          <hr>
          <div class="row">
          <div class="col-md-2"><?=$j?></div>
          <div class="col-md-4"><?=$row2['keterangan']?></div>
          <div class="col-md-3"><?=$row2['nilai']?></div>
          <div class="col-md-3"><?=$row2['semester']?></div>
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
      } 
      ?>
  </tbody>
</table>
  </div>

</div>

    