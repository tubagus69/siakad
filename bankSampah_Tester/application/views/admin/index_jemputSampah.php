<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row mt-3"> -->

    <!-- <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('JemputSampah/tambah') ?>" class="btn btn-primary">Tambah Jemput Sampah</a>
        </div>
        <div class="card-body-icon">

        </div>
    </div> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="text-center card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Jemput Sampah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Permintaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jemputSampah as $js) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $js['nama']; ?></td>
                            <td><?= $js['alamat']; ?></td>
                            <td><?= $js['noTelp']; ?></td>
                            <td><?= $js['permintaan']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>JemputSampah/hapus/<?= $js['id_jemput']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <!-- <a href="<?= base_url(); ?>JemputSampah/edit/<?= $js['id_jemput']; ?>" class="fa fa-edit">Edit</a> -->
                                <a href="<?= base_url(); ?>JemputSampah/detail/<?= $js['id_jemput']; ?>" class="fa fa-info-circle">Detail</a>
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