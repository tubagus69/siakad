<div class="container mt-20">
    <div class="col-md-12">
        <h1 class="text-center mb-30"><?= $title ?></h1>
    </div>
    <table class="table wy-table-striped wy-table-bordered" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
                foreach ($mahasiswa as $mhs):
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->email ?></td>
                <td><?= $mhs->jurusan ?></td>
            </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>