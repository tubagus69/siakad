<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row mt-3"> -->

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('Petugas/tambah') ?>" class="btn btn-primary">Tambah Petugas</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class=" text-center card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tgl_lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>noTelp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($petugas as $ptgs) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $ptgs['nama']; ?></td>
                            <td><?= $ptgs['email']; ?></td>
                            <td><?= $ptgs['tgl_lahir']; ?></td>
                            <td><?= $ptgs['agama']; ?></td>
                            <td><?= $ptgs['alamat']; ?></td>
                            <td><?= $ptgs['noTelp']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>Petugas/hapus/<?= $ptgs['id_petugas']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="<?= base_url(); ?>Petugas/edit/<?= $ptgs['id_petugas']; ?>" class="fa fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>Petugas/detail/<?= $ptgs['id_petugas']; ?>" class="fa fa-info-circle">Detail</a>
                            </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>