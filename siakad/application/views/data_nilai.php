  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Kelas</h5>
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

<div class="modal fade" id="view<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-2">No</div>
          <div class="col-md-7">Mapel</div>
          <div class="col-md-3">Action</div>
        </div>
        <?php
        $j=1;
        if($row['mapel']!=''){
        $data_mapel=explode(",",$row['mapel']);
        foreach ($data_mapel as $row2) {
          $kode_mapel=$this->m_mapel->get_idmapel($row2)->row_array();
          ?>
          <hr>
          <div class="row">
          <div class="col-md-2"><?=$j?></div>
          <div class="col-md-7"><?=$row2?></div>
          <div class="col-md-3">
            <a href="<?=base_url('index.php/nilai/nilai_siswa/').$row['id_kelas'].'/'.$kode_mapel['kode']?>">
              <button class="btn btn-success">View</button>
            </a>
          </div>
          </div>
          <?php
        $j++; }
      }
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
          <td><?=$row['nama_kelas']?></td>
          <td><?=$this->m_siswa->get_jumlah_siswa($row['id_kelas'])->row()->jumlah?></td>
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
  </div>

</div>

    