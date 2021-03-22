<div class="container">
<?php if ($this->session->flashdata('flash-data')) :?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Siswa <strong> berhasil </strong> 
                <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>siswa/tambah " class="btn btn-primary"> Tambah Data</a>
        <div>
    <div>

<div class="row mt-3">
    <div class="col-md-6">
    <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Siswa" name="keyword">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </div>
    </form>
</div>
</div>


<div class="container">
    <!-- at-3 artinya margin top3 -->
<div class="row mt-3">
    <div class="col-md-6">
    <h2>Daftar Siswa</h2>
    <?php if (empty($siswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Siswa tidak ditemukan
            </div>
            <?php endif; ?>
    <ul class="list-group">
        <table border = 1px>
        <tr align = center>
        <th></th>
        <th></th>
        <th></th>
        <th>id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>nim</th>
        </tr>

        <?php foreach ($siswa as $ssw) :?>
        <tr>
        <td><a href="<?= base_url();?>siswa/hapus/<?=$ssw['id'];?>"
        class="badge badge-danger float-right"
            onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
        <td><a href="<?= base_url();?>siswa/edit/<?= $ssw ['id'];?>"
                class="badge badge-success float-right">Edit</a></td>

        <td><a href="<?= base_url();?>siswa/detail/<?=$ssw['id'];?>"
                class="badge badge-primary float-right">Detail</a></td>
        <td><?php echo $ssw ["id"]; ?></td>
        <td><?php echo $ssw ["nama"]; ?></td>
        <td><?php echo $ssw ["alamat"]; ?></td>
        <td><?php echo $ssw ["nim"]; ?></td>
        
        </tr>
        <?php endforeach ;?>
        </table>
    </ul>
    </div>
</div>
</div>