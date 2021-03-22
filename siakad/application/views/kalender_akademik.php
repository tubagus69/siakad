<div class="row" style="margin-top: 2%">
  <div class="col-md-12">
    <div class="card">
  
  <div class="card-body">
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
  </div>
</div>
  </div>