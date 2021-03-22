  <div class="card">
  <div class="card-body">
    <h5 class="card-title">List Kelas</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Nama Kelas</th>
      <th>Wali Kelas</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
        foreach ($list_kelas as $row) {
          ?>
          
<div class="modal fade" id="edit<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kelas/edit_kelas')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Nama Kelas</div>
          <div class="col-md-6">Wali Kelas</div>
          <div class="col-md-6">
        <input type="hidden" name="id_kelas" value="<?=$row['id_kelas']?>">
        <input type="text" name="nama_kelas" class="form-control" value="<?=$row['nama_kelas']?>">
      </div>
      <div class="col-md-6">
        <select name="wali_kelas" class="form-control">
          <?php
          $list_guru=$this->m_default->get_data('tblguru')->result_array();
          foreach ($list_guru as $row2) {
            ?>
            <option value="<?=$row2['id_guru']?>" <?php if($row['wali_kelas']==$row2['id_guru']){ echo 'selected';} ?>><?=$row2['nama_guru']?></option>
            <?php
          }
          ?>
        </select>
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

<div class="modal fade" id="tambahmapel<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kelas/edit_mapelkelas')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mapel Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-12"><h5>List Mapel</h5></div>
        <input type="hidden" name="id_kelas" value="<?=$row['id_kelas']?>">
        <div class="col-md-12">
          <textarea name="mapel" class="form-control" placeholder="Example: matematika,ipa,bahasa indonesia,dll"><?=$row['mapel']?></textarea>
        </div>
          </div>
        </div>        
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>    
  </div>

          <tr>
          <td><?=$i?></td>
          <td><?=$row['nama_kelas']?></td>
          <td><?=$row['nama_guru']?></td>
          <td>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#detailkelas<?=$i?>">Detail Kelas</button>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#edit<?=$i?>">Edit</button>
            <a href="<?=base_url('index.php/kelas/hapus_kelas/').$row['id_kelas']?>">
            <button class="btn btn-danger">Hapus</button></a>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahmapel<?=$i?>">Tambah Mapel</button>
        </td>
          </tr>
          <div class="modal fade" id="detailkelas<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -35%;width: 150%">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-2">No</div>
          <div class="col-md-3">NIS</div>
          <div class="col-md-7">Nama</div>
        </div>
        <?php
        $j=1;
        $data_kelas=$this->m_siswa->get_siswakelas($row['id_kelas'])->result_array();
        foreach ($data_kelas as $row2) {
          ?>
          <hr>
          <div class="row">
          <div class="col-md-2"><?=$j?></div>
          <div class="col-md-3"><?=$row2['nis']?></div>
          <div class="col-md-7"><?=$row2['nama_siswa']?></div>
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
          <?php
        $i++;
        }
      ?>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-3">
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah_kelas">
    Tambah Kelas
  </button>
    </div>
  </div>

  <div class="modal fade" id="tambah_kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: -10%" >
  <div class="modal-dialog" role="document">
    <form action="<?=base_url('index.php/kelas/tambah_kelas')?>" method="post" enctype="multipart/form-data">
    <div class="modal-content" style="width: 150%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-top:1%">
          <div class="col-md-6">Nama Kelas</div>
          <div class="col-md-6">Wali Kelas</div>
          <div class="col-md-6">
        <input type="text" name="nama_kelas" class="form-control">
      </div>
      <div class="col-md-6">
                <select name="wali_kelas" class="form-control">
          <?php
          $list_guru=$this->m_default->get_data('tblguru')->result_array();
          foreach ($list_guru as $row2) {
            ?>
            <option value="<?=$row2['id_guru']?>"><?=$row2['nama_guru']?></option>
            <?php
          }
          ?>
        </select>
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

  </div>
</div>

    