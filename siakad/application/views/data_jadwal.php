  
<?php
if($this->session->userdata('tipe')=='siswa'){
?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">List Jadwal Kelas</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam Pelajaran</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_jadwal as $jadwal) {
          ?>

          <tr>
          <td><?=$i?></td>
          <td>
            <?php
            switch ($jadwal['hari']) {
               case "1":
                echo "Senin";
                break;
                case "2":
                echo "Selasa";
                break;
                case "3":
                echo "Rabu";
                break;
                case "4":
                echo "Kamis";
                break;
                case "5":
                echo "Jumat";
                break;
                case "6":
                echo "Sabtu";
                break;
                default:
                echo "";
}
            ?>
          </td>
          <td>
            <table>
            <tr>
            <?php
            $j=1;
            $a=explode(",",$jadwal['jadwal']);
            foreach ($a as $b) {
              ?>
              <td>
                Ke-<?=$j?>
              </td>
              <td>
                : <?=$b?>
              </td>
              </tr>
              <?php
            $j++; }
            ?>
          </table>
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
<?php
} else{
  ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">List Jadwal Kelas</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_kelas as $row) {
          ?>

          <tr>
          <td><?=$i?></td>
          <td><?=$row['nama_kelas']?></td>
          <td>
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#view<?=$i?>">View</button>
          </td>
          </tr>
          <div class="modal fade" id="view<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Jadwal Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
            <h5>Hari</h5>
          </div>
          <div class="col-md-6">
            <h5>Jam Pelajaran</h5>
          </div>
          
          <?php
          if($this->session->userdata('tipe')=='admin'){
            ?>
<div class="col-md-3">
            <h5>Action</h5>
          </div>
            <?php
          }
          ?>
          
        </div>
        <div class="row">
        <?php
        $jadwal_kelas=$this->m_jadwal->jadwal_kelas($row['id_kelas'])->result_array();
        foreach ($jadwal_kelas as $jadwal) {
          ?>

          <div class="col-md-3">
            <hr>
            <?php
            switch ($jadwal['hari']) {
               case "1":
                echo "Senin";
                break;
                case "2":
                echo "Selasa";
                break;
                case "3":
                echo "Rabu";
                break;
                case "4":
                echo "Kamis";
                break;
                case "5":
                echo "Jumat";
                break;
                case "6":
                echo "Sabtu";
                break;
                default:
                echo "";
}
            ?>
          </div>
          <div class="col-md-6">
            <hr>
            <div class="row">
            <?php
            $j=1;
            $a=explode(",",$jadwal['jadwal']);
            foreach ($a as $b) {
              ?>
              <div class="col-md-4">
                Ke-<?=$j?>
              </div>
              <div class="col-md-6">
                : <?=$b?>
              </div>
              <?php
            $j++; }
            ?>
          </div>
          </div>
          <?php
          if($this->session->userdata('tipe')=='admin'){
            ?>
<div class="col-md-3">
  <hr>
            <a href="<?=base_url('index.php/jadwal/edit_jadwal/').$jadwal['id_jadwal']?>"><button class="btn btn-warning">
              Edit
            </button></a>
            <a href="<?=base_url('index.php/jadwal/hapus_jadwal/'.$jadwal['id_jadwal'])?>"><button class="btn btn-danger">
              Hapus
            </button></a>
          </div>
            <?php
          }
          else{
            ?>
            <div class="col-md-3"></div>
            <?php
          }
        }
        ?>
      </div>
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
  <?php
  if($this->session->userdata('tipe')=='admin')
  {
    ?>
<div class="row">
    <div class="col-md-3">
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_jadwal">
    Tambah Jadwal
  </button>
    </div>
  </div>
  

  <div class="modal fade" id="tambah_jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/jadwal/tambah_jadwal')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Hari</div>
          <div class="col-md-6">Kelas</div>
          <div class="col-md-6">
          <select name="hari" class="form-control">
            <option value="1">Senin</option>
            <option value="2">Selasa</option>
            <option value="3">Rabu</option>
            <option value="4">Kamis</option>
            <option value="5">Jumat</option>
            <option value="6">Sabtu</option>
          </select>
          </div>
      <div class="col-md-6">
              <select name="kelas" class="form-control">
          <?php
          foreach ($list_kelas as $row2) {
            ?>
            <option value="<?=$row2['id_kelas']?>"><?=$row2['nama_kelas']?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="col-md-12">
        Jadwal
      </div>
      <div class="col-md-12">
        <textarea name="jadwal" class="form-control" placeholder="Example : matematika,matematika,istirahat,ipa,.."></textarea>
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
<?php
  }
  ?>
  </div>
</div>
  <?php
}
?>
  

    