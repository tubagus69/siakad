<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row mt-3"> -->

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('Nasabah/tambah') ?>" class="btn btn-primary">Tambah Nasabah</a>
        </div>
        <div class="card-body-icon">

        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="text-center card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Nasabah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nasabah as $nsbh) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $nsbh['name']; ?></td>
                            <td><?= $nsbh['email']; ?></td>
                            <td><?= $nsbh['address']; ?></td>
                            <td><?= $nsbh['noTelp']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>Nasabah/hapus/<?= $nsbh['id_nasabah']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="<?= base_url(); ?>Nasabah/edit/<?= $nsbh['id_nasabah']; ?>" class="fa fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>Nasabah/detail/<?= $nsbh['id_nasabah']; ?>" class="fa fa-info-circle">Detail</a>
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