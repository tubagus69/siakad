<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row mt-3"> -->

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('Setor/tambah') ?>" class="btn btn-primary">Tambah Setoran</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="text-center  card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Setoran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis_sampah</th>
                            <th>Kategori</th>
                            <th>Harga /KG</th>
                            <th>Jmlh_kg</th>
                            <th>Total Harga</th>
                            <th>Tgl Setor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($setor as $str) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $str['nama']; ?></td>
                            <td><?= $str['jenis_sampah']; ?></td>
                            <td><?= $str['kategori']; ?></td>
                            <td><?= $str['harga_per_kg']; ?></td>
                            <td><?= $str['jmlh_kg']; ?></td>
                            <td><?= $str['total_harga']; ?></td>
                            <td><?= $str['tgl_setor']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>Setor/hapus/<?= $str['id_setor']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="<?= base_url(); ?>Setor/edit/<?= $str['id_setor']; ?>" class="fa fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>Setor/detail/<?= $str['id_setor']; ?>" class="fa fa-info-circle">Detail</a>
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