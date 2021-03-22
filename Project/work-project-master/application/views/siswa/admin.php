<div class="container mt-20">
    <div class="col-md-12">
        <h1 class="text-center mb-30"><?= $title ?></h1>
    </div>
    <table class="table wy-table-striped wy-table-bordered" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
                foreach ($siswa as $s):
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s->nama; ?></td>
                <td><?= $s->alamat ?></td>
                <td><?= $s->nim ?></td>
            </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>