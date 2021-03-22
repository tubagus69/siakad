<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="text-center card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Password</th>
                            <th>Role_id</th>
                            <th>Is_active</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $usr) { ?>
                            <td><?= $no++; ?></td>
                            <td><?= $usr['name']; ?></td>
                            <td><?= $usr['email']; ?></td>
                            <td><?= $usr['image']; ?></td>
                            <td><?= $usr['password']; ?></td>
                            <td><?= $usr['role_id']; ?></td>
                            <td><?= $usr['is_active']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>User/hapus/<?= $usr['id_user']; ?>" class="fa fa-trash o" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="<?= base_url(); ?>User/detail/<?= $usr['id_user']; ?>" class="fa fa-info-circle">Detail</a>
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