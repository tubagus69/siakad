<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row mt-3"> -->

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('Nabung/tambah') ?>" class="btn btn-primary">Tambah Nabung</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="text-center card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Nabung</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Teller</th>
                            <th>Nama Nasabah</th>
                            <th>Tgl_transaksi</th>
                            <th>Jenis_Sampah</th>
                            <th>Kategori_Sampah</th>
                            <th>Jumlah_Kg</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nabung as $nbg) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $nbg['nama_petugas']; ?></td>
                            <td><?= $nbg['nama_nasabah']; ?></td>
                            <td><?= $nbg['tgl_transaksi']; ?></td>
                            <td><?= $nbg['jenis_sampah']; ?></td>
                            <td><?= $nbg['kategori_sampah']; ?></td>
                            <td><?= $nbg['jumlah_kg']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>Nabung/hapus/<?= $nbg['id_nabung']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="<?= base_url(); ?>Nabung/edit/<?= $nbg['id_nabung']; ?>" class="fa fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>Nabung/detail/<?= $nbg['id_nabung']; ?>" class="fa fa-info-circle">Detail</a>
                            </td>
                            </tr>
                        <?php  } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>