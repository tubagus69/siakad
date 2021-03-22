<div class="container" style="width:100%">
<?php if ($this->session->flashdata('flash-data')) :?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data pasien <strong> berhasil </strong> 
                <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
    
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="<?= base_url();?>pasien/tambah " class="btn btn-primary"> Tambah Data</a>
        <div>
    <div>

<div class="row mt-3">
    <div class="col-md-6">
    <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data pasien" name="keyword">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </div>
    </form>
</div>
</div>

<div class="container">
    <!--mt-3 artinya margin top-3-->
    <div class="row mt-1">
        <div class="col-md-6">
            <h2>Daftar pasien</h2>

            <?php if (empty($pasien)) : ?>
            <div class="alert alert-danger" role="alert">
                Data pasien tidak ditemukan
            </div>
            <?php endif; ?>
        <ul class="list-group">
            <!--<li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>-->

                
                <table class ="table">
                <thead class ="thead-dark"> 
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">No Rekam Medik</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Penanganan</th>
                <th>Aksi    </th>
                </thead>
            <?php foreach ($pasien as $psn):?>
                <tbody>
                </tr>
                <!-- <li class="list-group-item"> -->
                <tr>
                <td><?=$psn['nama'];?></td>
                <td><?=$psn['jeniskelamin'];?></td>
                <td><?=$psn['alamat'];?></td>
                <td><?=$psn['tanggallahir'];?></td>
                <td><?=$psn['norekammedik'];?></td>
                <td><?=$psn['tanggalkedokter'];?></td>
                <td><?=$psn['diagnosa'];?></td>
                <td><?=$psn['penanganan'];?></td>
                <td>
                <a href="<?= base_url();?>pasien/hapus/<?= $psn ['no'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>

                <a href="<?= base_url();?>pasien/edit/<?= $psn ['no'];?>"
                class="badge badge-success float-right">Edit</a>

                <a href="<?= base_url();?>pasien/detail/<?=$psn['no'];?>"
                class="badge badge-primary float-right">Detail</a>
                </td>
                </tr>
            <?php endforeach; ?>
</tbody>
            </table>

            
        </ul>
        </div>
    </div>
</div>
