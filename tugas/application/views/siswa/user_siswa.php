<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align : center; margin-bottom:30px"> Data Siswa </h1>
    </div>

    <table class="table table-stripped table-bordered" id="list_ssw">
    <thead>
        <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>NIM</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no=1;
            foreach($siswa as $ssw){?>
                <tr>
                    <td> <?= $no++; ?></td>
                    <td> <?= $ssw->nama; ?></td>
                    <td> <?= $ssw->alamat; ?></td>
                    <td> <?= $ssw->nim; ?></td>
                </tr>
            <?php } ?>
    </tbody>
    </table>
</div>


<!--<h1> Ini halaman user </h1>
<h1>Hello, <?php echo $this->session->userdata('level'); ?>!</h1>
<a href=" <?= base_url().'loginsiswa/logout';?>">Logout</a>-->